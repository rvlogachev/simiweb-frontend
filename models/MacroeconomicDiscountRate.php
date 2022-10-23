<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "macroeconomic_discount_rate".
 *
 * @property int $id
 * @property int $metaload_dataset_id
 * @property int|null $year
 * @property int|null $for_year
 * @property float|null $discount_rate
 */
class MacroeconomicDiscountRate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'macroeconomic_discount_rate';
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
            [['discount_rate'], 'number'],
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
            'discount_rate' => 'Discount Rate',
        ];
    }
}
