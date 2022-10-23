<?php

namespace app\models\productiongraph;

use app\models\spr\BusinessAlgorythmsSpr;
use app\models\spr\RedevsAffectsSpr;
use app\models\spr\WarehouseSpr;
use yii\db\ActiveRecord;
use app\models\spr\ProductionUnitsSpr;
use app\models\spr\RedevsSpr;
use app\models\spr\BusinessOrgsSpr;

/**
 * This is the model class for table "accounts".
 *
 * @property int $id
 * @property int $one_or_three
 * @property int $period_loading
 * @property string|null $metaload_date
 * @property int $metaload_dataset_id
 * @property int $metaload_user_id
 * @property string|null $metaload_comment
 * @property string|null $metaagree_date
 * @property string|null $metaagree_state
 * @property string|null $metaagree_user_id
 * @property string|null $metaagree_comment
 * @property string|null $be_code
 * @property string|null $group_code
 * @property string|null $po_code
 * @property string|null $pe_code
 * @property string|null $node_code
 * @property string|null $name
 * @property string|null $code
 * @property string|null $group
 * @property string|null $type
 * @property int $year
 * @property double $coord_x
 * @property double $coord_y
 * @property int $period
 * @property int $delay
 * @property double $coefficient_max_power
 * @property int $level
 * @property string|null $production_type
 * @property int $is_content
 *
 */
class Node extends ActiveRecord
{

    public static $dataset_id = NULL;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'production_graph_nodes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[
                'year',
                'period',
                'delay_time',
                'is_fix_content'
            ], 'integer'],
            [[
                'coord_x', 
                'coord_y'
            ], 'double'],
            [[
                'metaload_dataset_id'
            ], 'required'],
            [[
                'node_type'
            ], 'string', 'max' => 1],
            [[ 
                'node_name',
                'node_code', 
                'group_be',
                'group_pe', 
                'group_name',
                'product_type'
            ], 'string', 'max' => 50],
            [
                'group_pe', 'exist',
                'targetClass' => ProductionUnitsSpr::className(),
                'targetAttribute' => 'code',
                'filter' => ['deleted_at' => NULL],
                'message' => 'Trying to write Node with group_be for which no business unit is present in production_units_spr with this code'
            ],
            [
                'code', 'exist',
                'targetClass' => RedevsSpr::className(),
                'targetAttribute' => 'code',
                'filter' => ['deleted_at' => NULL],
                'message' => 'Trying to write Node with code for which no redev is present in redevs_spr with this code'
            ],
            [
                'code', 'exist',
                'targetClass' => RedevsAffectsSpr::className(),
                'targetAttribute' => 'code',
                'filter' => ['deleted_at' => NULL],
                'message' => 'Trying to write Node with code for which no redev affect is present in redevs_affects_spr with this code'
            ],
            [
                'group_be', 'exist',
                'targetClass' => BusinessOrgsSpr::className(),
                'targetAttribute' => 'code',
                'filter' => ['deleted_at' => NULL],
                'message' => 'Trying to write Node with group_be for which no business unit is present in business_orgs_spr with this code'
            ],

            [
                'storage_code', 'exist',
                'targetClass' => WarehouseSpr::className(),
                'targetAttribute' => 'code',
                'filter' => ['deleted_at' => NULL],
                'message' => 'Trying to write Node with group_be for which no warehouse is present in warehouse_spr with this code'
            ],
            [
                'name', 'exist',
                'targetClass' => BusinessAlgorythmsSpr::className(),
                'targetAttribute' => 'code',
                'filter' => ['deleted_at' => NULL],
                'message' => 'Trying to write Node with group_be for which no business algorythm is present in business_algorythms_spr with this code'
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
