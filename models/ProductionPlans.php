<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "production_plans".
 *
 * @property int $id
 * @property int $metaload_dataset_id
 * @property string|null $source_node_code
 * @property string|null $source_node_name
 * @property string|null $target_node_code
 * @property string|null $target_node_name
 * @property int|null $year
 * @property string|null $component_code
 * @property string|null $unit_code
 * @property string|null $unit_name
 * @property float|null $volume
 * @property float|null $v
 * @property string|null $content_unit_code
 * @property string|null $content_unit_name
 * @property float|null $content
 * @property string|null $extract_unit_code
 * @property string|null $extract_unit_name
 * @property float|null $extract
 */
class ProductionPlans extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'production_plans';
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
            [['volume', 'v', 'content', 'extract'], 'number'],
            [['source_node_code', 'target_node_code'], 'string', 'max' => 50],
            [['source_node_name', 'target_node_name', 'unit_name', 'content_unit_name', 'extract_unit_name'], 'string', 'max' => 512],
            [['component_code', 'unit_code', 'content_unit_code', 'extract_unit_code'], 'string', 'max' => 10],
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
            'source_node_code' => 'Source Node Code',
            'source_node_name' => 'Source Node Name',
            'target_node_code' => 'Target Node Code',
            'target_node_name' => 'Target Node Name',
            'year' => 'Year',
            'component_code' => 'Component Code',
            'unit_code' => 'Unit Code',
            'unit_name' => 'Unit Name',
            'volume' => 'Volume',
            'v' => 'V',
            'content_unit_code' => 'Content Unit Code',
            'content_unit_name' => 'Content Unit Name',
            'content' => 'Content',
            'extract_unit_code' => 'Extract Unit Code',
            'extract_unit_name' => 'Extract Unit Name',
            'extract' => 'Extract',
        ];
    }
}
