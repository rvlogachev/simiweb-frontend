<?php

namespace app\models\productiongraph;

use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\db\Query;
use app\models\productiongraph\Node;
use app\models\productiongraph\Sklad;

/**
 * This is the model class for table "accounts".
 */
class Edge extends ActiveRecord
{

    public static $dataset_id = NULL;

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
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'one_or_three' => 'Created At',


            'metaload_dataset_id' => 'Created At',
            'edge_code' => 'Updated At',
            'source' => 'Updated At',
            'target' => 'Updated At',
            'sklad_code' => 'Updated At',
            'transport' => 'Updated At',
            'year' => 'Updated At',
            'edge_type' => 'Updated At',
            'coefficient_influence' => 'Deleted At',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[
                'year',
            ], 'integer'],
            [[
                'influence_coefficient'
            ], 'double'],
            [[
                'metaload_dataset_id',
            ], 'required'],
            [[
                'edge_type'
            ], 'string', 'max' => 2],
            [[
                'storage_code',
            ], 'string', 'max' => 10],
            [[
                'source_node',
                'target_node'
            ], 'string', 'max' => 50],
            [
                'source_node', 'exist',
                'targetClass' => Node::className(),
                'targetAttribute' => 'node_name',
                'filter' => ['metaload_dataset_id' => self::$dataset_id],
                'message' => 'Trying to write Edge when source_node Node with this node_name is absent in file'
            ],
            [
                'target_node', 'exist',
                'targetClass' => Node::className(),
                'targetAttribute' => 'node_name',
                'filter' => ['metaload_dataset_id' => self::$dataset_id],
                'message' => 'Trying to write Edge when target_node Node with this node_name is absent in file'
            ],
            [
                'storage_code', 'exist',
                'targetClass' => Sklad::className(),
                'targetAttribute' => 'storage_code',
                'filter' => ['metaload_dataset_id' => self::$dataset_id],
                'message' => 'Trying to write Edge when storage_code Sklad with this storage_code is absent in file'
            ],
        ];
    }

    public static function findByParams($id, $search = null, $year = null, $edge_type = null)
    {
        $tableName = self::tableName();
        $query = (new Query())
            ->select('id, source_node, target_node, storage_code, year, edge_type, influence_coefficient')
            ->from($tableName);

        $query->andWhere(['metaload_dataset_id' => $id]);
        
        if (!empty($search)) {
            $query->andWhere(['like', 'source_node', $search]);
            $query->orWhere(['like', 'target_node', $search]);
        }

        if ($year === '1') {
            $query->andWhere(['year' => '1']);
        } elseif ($year === '2') {
            $query->andWhere(['year' => '2']);
        } elseif ($year === '3') {
            $query->andWhere(['year' => '3']);
        }

        if (!is_null($edge_type)) {
            $query->andWhere(['edge_type' => $edge_type]);
        }

        $query->orderBy('source_node ASC, target_node ASC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 100000,
            ],
        ]);

        return $dataProvider;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, source_node, target_node, storage_code, year, edge_type, influence_coefficient')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
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
