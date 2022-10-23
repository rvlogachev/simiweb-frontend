<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "macroeconomic_inflation_coeff".
 *
 * @property int $id
 * @property int $metaload_dataset_id
 * @property int|null $year
 * @property int|null $for_year
 * @property string|null $unit_code
 * @property float|null $index
 */
class MacroeconomicInflationCoeff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'macroeconomic_inflation_coeff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['metaload_dataset_id'], 'required'],
            [['metaload_dataset_id', 'year', 'for_year'], 'default', 'value' => null],
            [['metaload_dataset_id', 'year', 'for_year'], 'integer'],
            [['index'], 'number'],
            [['unit_code'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'metaload_dataset_id' => 'Metaload Dataset ID',
            'year' => 'Year',
            'for_year' => 'For Year',
            'unit_code' => 'Unit Code',
            'index' => 'Index',
        ];
    }
}
