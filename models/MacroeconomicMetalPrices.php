<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "macroeconomic_metal_prices".
 *
 * @property int $id
 * @property int $metaload_dataset_id
 * @property string|null $component_code
 * @property string|null $component_name
 * @property string|null $currency_code
 * @property string|null $unit_code
 * @property int|null $year
 * @property int|null $for_year
 * @property float|null $value
 */
class MacroeconomicMetalPrices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'macroeconomic_metal_prices';
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
            [['value'], 'number'],
            [['component_code', 'currency_code', 'unit_code'], 'string', 'max' => 10],
            [['component_name'], 'string', 'max' => 512],
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
            'component_code' => 'Component Code',
            'component_name' => 'Component Name',
            'currency_code' => 'Currency Code',
            'unit_code' => 'Unit Code',
            'year' => 'Year',
            'for_year' => 'For Year',
            'value' => 'Value',
        ];
    }
}
