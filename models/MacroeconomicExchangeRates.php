<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "macroeconomic_exchange_rates".
 *
 * @property int $id
 * @property int $metaload_dataset_id
 * @property string|null $from_currency_en_code
 * @property string|null $to_currency_en_code
 * @property int|null $year
 * @property int|null $for_year
 * @property int|null $dimensions
 * @property float|null $value
 */
class MacroeconomicExchangeRates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'macroeconomic_exchange_rates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['metaload_dataset_id'], 'required'],
            [['metaload_dataset_id', 'year', 'for_year', 'dimensions'], 'default', 'value' => null],
            [['metaload_dataset_id', 'year', 'for_year', 'dimensions'], 'integer'],
            [['value'], 'number'],
            [['from_currency_en_code', 'to_currency_en_code'], 'string', 'max' => 10],
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
            'from_currency_en_code' => 'From Currency En Code',
            'to_currency_en_code' => 'To Currency En Code',
            'year' => 'Year',
            'for_year' => 'For Year',
            'dimensions' => 'Dimensions',
            'value' => 'Value',
        ];
    }
}
