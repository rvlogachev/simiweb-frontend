<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "production_graph_edges".
 *
 * @property int $id
 * @property int $metaload_dataset_id
 * @property string|null $source_node_code
 * @property string|null $source_node_name
 * @property string|null $target_node_code
 * @property string|null $target_node_name
 * @property int|null $year
 * @property string|null $edge_type
 * @property string|null $storage_code
 * @property string|null $storage_name
 * @property string|null $transport_code
 * @property string|null $transport_name
 * @property float|null $influence_coefficient
 */
class ProductionGraphEdges extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'production_graph_edges';
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
            [['influence_coefficient'], 'number'],
            [['source_node_code', 'target_node_code', 'transport_code'], 'string', 'max' => 50],
            [['source_node_name', 'target_node_name', 'storage_name', 'transport_name'], 'string', 'max' => 512],
            [['edge_type'], 'string', 'max' => 3],
            [['storage_code'], 'string', 'max' => 10],
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
            'edge_type' => 'Edge Type',
            'storage_code' => 'Storage Code',
            'storage_name' => 'Storage Name',
            'transport_code' => 'Transport Code',
            'transport_name' => 'Transport Name',
            'influence_coefficient' => 'Influence Coefficient',
        ];
    }
}
