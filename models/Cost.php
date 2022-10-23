<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cost".
 *
 * @property int $id
 * @property int $metaload_dataset_id
 * @property string|null $dataset_source_code
 * @property string|null $redev_code
 * @property string|null $product_code
 * @property string|null $fabric_code
 * @property int|null $year
 * @property string|null $unit_code
 * @property float|null $cost_total
 * @property float|null $amortization_main
 * @property float|null $intangible_assets
 */
class Cost extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cost';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['metaload_dataset_id'], 'required'],
            [['metaload_dataset_id', 'year'], 'default', 'value' => null],
            [['metaload_dataset_id', 'year'], 'integer'],
            [['cost_total', 'amortization_main', 'intangible_assets'], 'number'],
            [['dataset_source_code', 'fabric_code', 'unit_code'], 'string', 'max' => 10],
            [['redev_code'], 'string', 'max' => 50],
            [['product_code'], 'string', 'max' => 20],
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
            'dataset_source_code' => 'Dataset Source Code',
            'redev_code' => 'Redev Code',
            'product_code' => 'Product Code',
            'fabric_code' => 'Fabric Code',
            'year' => 'Year',
            'unit_code' => 'Unit Code',
            'cost_total' => 'Cost Total',
            'amortization_main' => 'Amortization Main',
            'intangible_assets' => 'Intangible Assets',
        ];
    }
}
