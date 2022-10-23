<?php

namespace app\controllers\utilities;

class ExcelReader 
{
    private static $db_to_sheet_path = "/app/config/db_table_to_xlsx_sheet.ini";
    private static $colnames_row_num = 1;
    private static $start_row_num = 2;

    //функция получает список моделей, эксель-файл, айди загруженного файла и boolean 1 год/3 года.
    //первым делом - валидация наличия нужных листов и возвращение недостающих листов. Если таковые есть - провал;
    //вторым делом - валидация наличия на нужных листах соответствующих колонок;
    //третьим делом - считываем значения в массив моделей;
    //четвёртым делом - индивидуальная валидация каждого значения с возвратом моделей массивом класс модели - массив моделей;
    //пятым делом - запись в БД по массивам.
    //если провалилась любая из стадий валидации или записи - загруженный файл удаляется, все записи в бд по фильтру этого файла также удаляются, выводится флэш об ошибке.

    /*
        Проверяет, все ли необходимые листы есть в переданном excel-файле.
        Для этого используется файл /app/config/db_table_to_xlsx_sheet.ini, в котором прописано соответствие таблицы в БД и имени Excel-листа.
        Предполагается, что для $three_year_on_sheet = true всех листов по одному и они заканчиваются на "_1", для false - три листа на модель, оканчивающихся на _1, _2 и _3, соответственно.
        Возвращает массив листов, которых не хватает в эксель-файле.
    */
    public static function validateSheets ($objPHPExcel, $models, $three_year_on_sheet)
    {
        $required_sheets = array();
        $sheetNames = $objPHPExcel->getSheetNames();
        foreach($models as $model) {
            $required_sheets[] = self::db_table_to_excel_sheet($model::tableName(), 1);

            if (!$three_year_on_sheet) {
                $required_sheets[] = self::db_table_to_excel_sheet($model::tableName(), 2);
                $required_sheets[] = self::db_table_to_excel_sheet($model::tableName(), 3);
            }

        }
        $missing_sheets = array_diff($required_sheets, $sheetNames);
        return $missing_sheets;
    }

    /*
        Проверяет наличие необходимых колонок из моделей в переданном excel-файле.
        Листы обязаны иметь все колонки, перечисленные в соответствующих им моделях, кроме тех, что содержатся в аргументе not_obligatory.
        Возвращает массив (имя листа -> список колонок, которых не хватает)
    */
    public static function validateColumns ($objPHPExcel, $models, $three_year_on_sheet, $not_obligatory)
    {
        $sheetColsMissing = array();
        foreach($models as $model) {
            $firstYear = self::db_table_to_excel_sheet($model::tableName(), 1);
            $firstYearColsMissing = array_diff(self::getMissingCols($objPHPExcel, $model, $firstYear), $not_obligatory);
            if ($firstYearColsMissing) {
                $sheetColsMissing[$firstYear] = $firstYearColsMissing;
            }

            if (!$three_year_on_sheet) {
                $secondYear = self::db_table_to_excel_sheet($model::tableName(), 2);
                $secondYearColsMissing = array_diff(self::getMissingCols($objPHPExcel, $model, $secondYear), $not_obligatory);
                if ($secondYearColsMissing) {
                    $sheetColsMissing[$secondYear] = $secondYearColsMissing;
                }
                $thirdYear = self::db_table_to_excel_sheet($model::tableName(), 3);
                $thirdYearColsMissing = array_diff(self::getMissingCols($objPHPExcel, $model, $thirdYear), $not_obligatory);
                if ($thirdYearColsMissing) {
                    $sheetColsMissing[$thirdYear] = $thirdYearColsMissing;
                }
            }

        }
        return $sheetColsMissing;
    }

    /*
        Запускает метод валидации на каждом из объектов. Если хотя бы одна модель не прошла валидацию, функция возвращает список ошибок на первом не прошедшем объекте.
    */
    public static function validateWriteAllAndReturnErrors ($modelsToValidate) {
        //TODO: условие проверки
        $errors = array();
        foreach($modelsToValidate as $modelToValidate)
        {
            if (!$modelToValidate->validate()) {
                $errors = $modelToValidate->errors;
                return $errors;
            } else {
                $modelToValidate->save();
            }
        }
        return $errors;
    }

    /*
        Возвращает массив моделей, прочитанных из переданного excel-файла.
    */
    public static function readAll ($objPHPExcel, $models, $uploadFileId, $three_year_on_sheet) {
        $readModels = array();
        foreach ($models as $model) {
            $readModels = array_merge($readModels, self::getModelsFromSheet($objPHPExcel, $model, $uploadFileId, 1));
            if (!$three_year_on_sheet) {
                $readModels = array_merge($readModels, self::getModelsFromSheet($objPHPExcel, $model, $uploadFileId, 2));
                $readModels = array_merge($readModels, self::getModelsFromSheet($objPHPExcel, $model, $uploadFileId, 3));
            }
        }
        return $readModels;
    }

    /*
        Стирает все загруженные модели из БД и удаляет загруженный файл из того места, куда он был загружен
    */
    public static function abortSave ($filePath, $modelsToDelete, $fileModel)
    {
        $fileModel->delete();
        return self::deleteUploadedFile($filePath) && self::deleteObjects($modelsToDelete);
    }

    private static function deleteObjects ($modelsToDelete)
    {
        //TODO: условие ($modelToDelete->delete() > 0)
        foreach($modelsToDelete as $modelToDelete)
        {
            $modelToDelete->delete();
        }
        return true;
    }

    private static function deleteUploadedFile($filePath)
    {
        return unlink($filePath);
    }

    private static function getModelsFromSheet ($objPHPExcel, $model, $uploadFileId, $year) {
        $sheetModels = array();
        $sheetData = $objPHPExcel->getSheetByName(self::db_table_to_excel_sheet($model::tableName(), $year))->toArray(null, true, true, true);
        for ($i=self::$start_row_num;$i<=count($sheetData);$i++) {
            $sheetRow = $sheetData[$i];
            $arrayRow = array();
            foreach($sheetData[self::$colnames_row_num] as $col_index => $col_name){
                $arrayRow['metaload_dataset_id'] = $uploadFileId;
                if ($col_name == '') {
                    break;
                } else {
                    $arrayRow[$col_name] = $sheetRow[$col_index];
                }
            }
            $object = $model::fromArray($arrayRow);
            $sheetModels[] = $object;
        }
        return $sheetModels;
    }

    private static function getMissingCols ($objPHPExcel, $model, $sheetName) {
        $sheetData = $objPHPExcel->getSheetByName($sheetName)->toArray(null, true, true, true);
        $colNames = array();
        foreach($sheetData[self::$colnames_row_num] as $col_index => $col_name){
            if ($col_name == '') {
                break;
            } else {
                $colNames[] = $col_name;
            }
        }
        $passingModel = new $model();
        return array_diff($passingModel->attributes(), $colNames);
    }

    private static function db_table_to_excel_sheet ($tableName, $year) {
        $db_table_to_excel_sheet = parse_ini_file(self::$db_to_sheet_path);
        return $db_table_to_excel_sheet[$tableName].'_'.strval($year);
    }

    public static function generateClassPopulationFromPHPExcelObj ($objPHPExcel, $model, $uploadFileId, $year = 1) 
    {
        // TODO: сделать $db_table_to_excel_sheet константой
        $sheet = self::db_table_to_excel_sheet($model::tableName(), $year);
        $sheetData = $objPHPExcel->getSheetByName($sheet)->toArray(null, true, true, true);
        for ($i=2;$i<=count($sheetData);$i++) {
            $sheetRow = $sheetData[$i];
            $arrayRow = array();
            foreach($sheetData[$row_num] as $col_index => $col_name){
                //required
                $arrayRow['metaload_dataset_id'] = $uploadFileId;
                if ($col_name == '') {
                    break;
                } else {
                    $arrayRow[$col_name] = $sheetRow[$col_index];
                }
            }
            $object = $model::fromArray($arrayRow);
            if ($object->save()) {
                Yii::$app->session->setFlash('success', 'Данные успешно сохранены.');
            } else {
                Yii::$app->session->setFlash('error', 'Данные не сохранены. Ошибка: '.print_r($object->getErrors()));
            }
        }
        //TODO: текст другой
    }
}