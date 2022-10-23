<?php

namespace app\models\productiongraph;

use yii\db\ActiveRecord;
use app\models\productiongraph\Node;

/**
 * This is the model class for table "production_graph_installed_power".
 *
 *
 */
class InstalledPower extends ActiveRecord
{

    public static $dataset_id = NULL;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'production_graph_installed_power';
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[
                'coefficient_max_power'
            ], 'double'],
            [[
                'metaload_dataset_id'
            ], 'required'],
            [[ 
                'node_name',
                'node_code',
            ], 'string', 'max' => 50],
            [
                'node_code', 'exist',
                'targetClass' => Node::className(),
                'targetAttribute' => 'node_code',
                'filter' => ['metaload_dataset_id' => self::$dataset_id],
                'message' => 'Trying to write InstalledPower when Node with this node_code is absent in file'
            ],
        ];
    }

    /**
     * @param array $params
     * @return Node
     */
    public static function fromArray(array $params = [])
    {
        $node = new static();
        $node->attributes = $params;
        return $node;
    }
}
