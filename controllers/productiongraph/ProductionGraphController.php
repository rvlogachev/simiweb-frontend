<?php

namespace app\controllers\productiongraph;

use app\components\SharedDataFilter;
use app\models\productiongraph\Node;
use app\models\productiongraph\Edge;
use app\models\productiongraph\Transport;
use app\models\productiongraph\Sklad;
use app\models\productiongraph\InstalledPower;
use app\models\productiongraph\InitialSkladNzp;
use app\models\UploadFiles;
use app\controllers\utilities\ExcelReader;
use Codeception\Module\Yii2;
use tebe\inertia\web\Controller;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\web\ServerErrorHttpException;

class ProductionGraphController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => AccessControl::className(),
                'only' => ['index', 'logout'],
                'rules' => [
                    [
                        'actions' => ['index', 'logout'],
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ],
            [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post']
                ]
            ],
            [
                'class' => SharedDataFilter::class
            ]
        ];
    }

    public function beforeAction($action)
    {
        if (in_array($action->id, ['insert'])) {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    private function generateClassPopulationFromPHPExcelObj ($objPHPExcel, $model, $uploadFileId, $year = 1) 
    {
    // TODO: сделать $db_table_to_excel_sheet константой
    $db_table_to_excel_sheet = parse_ini_file("/app/config/db_table_to_xlsx_sheet.ini");
    $sheet = $db_table_to_excel_sheet[$model::tableName()].'_'.strval($year);
    $row_num = 1;
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
            //TODO: что здесь?
            Yii::$app->session->setFlash('success', 'Данные успешно сохранены.');
        } else {
            Yii::$app->session->setFlash('error', 'Данные не сохранены. Ошибка: '.print_r($object->getErrors()));
        }
    }
    //TODO: текст другой
    }

    public function actionInsert()
    {
        header('Access-Control-Allow-Origin: *');
        $params = Yii::$app->request->post();
        $comment = (bool)$params["comment"];
        if (!isset($_FILES['file'])) {
            return false;
        }
        $file_name = $_FILES['file']['name'];
        $new_file_name = Yii::getAlias('@app')."/web/upload/".substr($_FILES['file']['name'], 0, -5).'_'.date('Y_m_d_H_i_s').'_user_'.Yii::$app->user->getId().'.xlsx';


        $dataArray = [
            'type' => 'upload_file',
            'title' => $file_name,
            'tmp_filename' => $_FILES["file"]["tmp_name"],
            'comment' => $comment,
            'data_send' => date("Y-m-d"),
        ];
        $exchange = 'exchange';
        $queue = 'ebitda';

        //$this->stdout("Starting ...SendQueue \n", Console::FG_YELLOW);

        $message = serialize($dataArray);
        Yii::$app->amqp->declareExchange($exchange, $type = 'direct', $passive = false, $durable = true, $auto_delete = false);


        Yii::$app->amqp->declareQueue($queue, $passive = false, $durable = true, $exclusive = false, $auto_delete = false);
        Yii::$app->amqp->bindQueueExchanger($queue, $exchange, $routingKey = $queue);
        Yii::$app->amqp->publish_message($message, $exchange, $routingKey = $queue, $content_type = 'applications/json', $app_id = isset($_GET['alias']) ? $_GET['alias'] : Yii::$app->name);

//
//        if (move_uploaded_file($_FILES["file"]["tmp_name"], $new_file_name )) {
//
//            $fileModel = new UploadFiles();
//            $fileModel->metaload_user_id = Yii::$app->user->getId();
//            $fileModel->metaload_date = date('Y-m-d H:i:s');
//            $fileModel->one_or_three = $three_year_on_sheet ? 3 : 1;
//            $fileModel->filename = $new_file_name;
//            $fileModel->description = 'Прозводственный граф';
//            $fileModel->metaload_comment = 'Загруженный файл: '.$file_name.'\r\nНовое название файла: '.$new_file_name.
//                                        '\r\nФайл сохранен в папке проекта: '.Yii::getAlias('@app')."/web/upload/";
//
//            if ($fileModel->save()) {
//                Yii::$app->session->setFlash('success', 'Файл успешно сохранен в системе.');
//            } else {
//                Yii::$app->session->setFlash('error', 'Файл не сохранен в системе.');
//            }
//            $objPHPExcel = \PHPExcel_IOFactory::load($new_file_name);
//
//            $models_to_read = array(Node::class, Transport::class, Sklad::class, InstalledPower::class, InitialSkladNzp::class, Edge::class);
//            $allModels = array();
//            /*
//                это позволяет создавать правило для фильтрации по текущему датасету
//                более лёгкого способа сделать это с классом ActiveRecord нет
//                DynamicRecord был бы лучше, т.к. позволяет создавать правила на ходу, но не хочется переезжать
//            */
//
//            foreach ($models_to_read as $model_to_change_dataset_id){$model_to_change_dataset_id::$dataset_id = $fileModel->id;}
//
//            $sheetErrors = ExcelReader::validateSheets($objPHPExcel, $models_to_read, $three_year_on_sheet);
////            $this->passStage(!$sheetErrors, 'В файле присутствуют все необходимые листы.', 'В файле отсутствуют листы :'.json_encode($sheetErrors), $fileModel, $new_file_name, $allModels);
////            $missingCols = ExcelReader::validateColumns($objPHPExcel, $models_to_read, $three_year_on_sheet, ["id", "metaload_dataset_id"]);
////            $this->passStage(!$missingCols, 'В листах присутствуют все необходимые колонки.  Начинаю запись в базу...', 'Отсутствующие колонки на листах :'.print_r($missingCols), $fileModel, $new_file_name, $allModels);
////            $allModels = ExcelReader::readAll($objPHPExcel, $models_to_read, $fileModel->id, $three_year_on_sheet);
//            $validationErrors = false;//ExcelReader::validateWriteAllAndReturnErrors($allModels);
//            $this->passStage(!$validationErrors, 'Все сущности прошли проверки и записаны в базу.', 'Ошибки в сущности, не прошедшей проверку :'.json_encode($validationErrors), $fileModel, $new_file_name, $allModels);
//        } else {
//            Yii::$app->session->setFlash('error', 'Файл не загружен в систему.');
//        }
        // return $this->redirect(['uploads/index']);
    }

    private function passStage($isSuccess, $successMessage, $errorMessage, $fileModel, $new_file_name, $allModels) {
        if ($isSuccess) {
            Yii::$app->session->setFlash('success', $successMessage);
            //print_r($successMessage);
            return $this->redirect(['uploads/index']);
        } else {
            Yii::$app->session->setFlash('error', $errorMessage);
            //print_r($errorMessage);
            ExcelReader::abortSave($new_file_name, $allModels, $fileModel);
            Yii::$app->session->setFlash('error', 'Загруженный файл удалён, записанные данные стёрты.');
            return $this->redirect(['uploads/index']);
        }
    }
}
