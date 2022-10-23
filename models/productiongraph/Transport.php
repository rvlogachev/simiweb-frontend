<?php

namespace app\models\productiongraph;

use yii\db\ActiveRecord;
use app\models\spr\ProductionUnitsSpr;


class Transport extends ActiveRecord
{

    public static $dataset_id = NULL;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'c_graph_transport';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'period',
                    'delay_time',
                    'max_power'
                ], 'integer'
            ],
            [
                [
                    'coefficient_max_power'
                ], 'double'
            ],
            [
                [
                    'metaload_dataset_id',
                ], 'required'
            ],
            [
                [
                     'transport_name',
                     'transport_code',
                     'tag_alternative',
                     'group_be',
                     'group_pe',
                     'group_name',
                     'transport_type'
                ], 'string', 'max' => 50
            ],
        ];
    }

    /**
     * @param array $params
     * @return Edge
     */
    public static function fromArray(array $params = [])
    {
        $edge = new static();
        $edge->attributes = $params;
        return $edge;
    }
}