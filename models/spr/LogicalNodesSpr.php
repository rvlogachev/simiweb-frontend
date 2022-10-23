<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Query;

/**
 * This is the model class for table "logical_nodes_spr".
 *
 * @property int $id
 * @property string $node_code
 * @property string|null $node_type
 * @property string $business_org_code
 * @property string $production_unit_code
 * @property string $node_name
 * @property string $target_node_code
 * @property float $influence_coefficient
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 *
 * @property BusinessOrgsSpr $businessOrgCode
 * @property ProductionUnitsSpr $productionUnitCode
 */
class LogicalNodesSpr extends \yii\db\ActiveRecord
{

    use SoftDeleteTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'logical_nodes_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['node_code', 'business_org_code', 'production_unit_code', 'node_name', 'target_node_code', 'influence_coefficient'], 'required'],
            [['influence_coefficient'], 'number','min'=>0],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['node_code', 'target_node_code'], 'string', 'max' => 50],
            [['node_type'], 'string', 'max' => 1],
            [['node_name'], 'string', 'max' => 512],
            [['business_org_code'], 'string', 'max' => 4],
            [['production_unit_code'], 'string', 'max' => 10],
            [['business_org_code'], 'exist', 'skipOnError' => true, 'targetClass' => BusinessOrgsSpr::className(), 'targetAttribute' => ['business_org_code' => 'business_org_code']],
            [['production_unit_code'], 'exist', 'skipOnError' => true, 'targetClass' => ProductionUnitsSpr::className(), 'targetAttribute' => ['production_unit_code' => 'production_unit_code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД',
            'node_code' => 'Код логической вершины',
            'node_type' => 'Тип вершины',
            'business_org_code' => 'Код БЕ',
            'production_unit_code' => 'Код ПЕ',
            'node_name' => 'Наименование логической вершины',
            'target_node_code' => 'Код вершины на которую влияет',
            'influence_coefficient' => 'Коэффициент влияния',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
        ];
    }

    /**
     * Gets query for [[BusinessOrgCode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBusinessOrgCode()
    {
        return $this->hasOne(BusinessOrgsSpr::className(), ['business_org_code' => 'business_org_code']);
    }

    public function getProductionUnitCode()
    {

        return $this->hasOne(ProductionUnitsSpr::className(), ['production_unit_code' => 'production_unit_code']);
    }

    public static function findByParams($search = null, $trashed_button = null, $business_org_code = null, $production_unit_code = null)
    {
        $query = (new Query())
            ->select('logical_nodes_spr.id,
            logical_nodes_spr.business_org_code,
            logical_nodes_spr.production_unit_code,
            logical_nodes_spr.node_code,
            logical_nodes_spr.node_type,
            logical_nodes_spr.node_name,  
            logical_nodes_spr.target_node_code,
            logical_nodes_spr.influence_coefficient,
            logical_nodes_spr.created_at,
            logical_nodes_spr.updated_at,
            logical_nodes_spr.deleted_at')
            ->from('logical_nodes_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(logical_nodes_spr.node_name)', strtolower($search)])
                ->orWhere(['like', 'upper(logical_nodes_spr.node_name)', strtoupper($search)])
                ->orWhere(['like', 'logical_nodes_spr.node_name', $search])
                ->orWhere(['like', 'logical_nodes_spr.node_type', $search])
                ->orWhere(['like', 'lower(logical_nodes_spr.node_type)', strtolower($search)])
                ->orWhere(['like', 'upper(logical_nodes_spr.node_type)', strtoupper($search)])
                ->orWhere(['like', 'logical_nodes_spr.production_unit_code', $search])
                ->orWhere(['like', 'lower(logical_nodes_spr.production_unit_code)', strtolower($search)])
                ->orWhere(['like', 'upper(logical_nodes_spr.production_unit_code)', strtoupper($search)])
                ->orWhere(['like', 'logical_nodes_spr.business_org_code', $search])
                ->orWhere(['like', 'lower(logical_nodes_spr.business_org_code)', strtolower($search)])
                ->orWhere(['like', 'upper(logical_nodes_spr.business_org_code)', strtoupper($search)])
                ->orWhere(['like', 'logical_nodes_spr.node_code', $search])
                ->orWhere(['like', 'lower(logical_nodes_spr.node_code)', strtolower($search)])
                ->orWhere(['like', 'upper(logical_nodes_spr.node_code)', strtoupper($search)])
                ->orWhere(['like', 'logical_nodes_spr.target_node_code', $search])
                ->orWhere(['like', 'lower(logical_nodes_spr.target_node_code)', strtolower($search)])
                ->orWhere(['like', 'upper(logical_nodes_spr.target_node_code)', strtoupper($search)]);

        }
        if ($trashed_button != 'true') {
            $query->andWhere([ 'logical_nodes_spr.deleted_at' => null]);
        }

        if ($business_org_code ) {
            $query->andWhere(['like', 'logical_nodes_spr.business_org_code',  $business_org_code ]) ;
        }

        if ($production_unit_code ) {
            $query->andWhere(['like', 'logical_nodes_spr.production_unit_code',  $production_unit_code ]) ;
        }


        $query->orderBy('logical_nodes_spr.node_name ASC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);

        return $dataProvider;
    }

    /**
     * @return array
     */
    public static function getPairs()
    {
        $pairs = (new Query())
            ->select('id, node_name, business_org_code')
            ->from('logical_nodes_spr')
            ->orderBy('node_name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $business_orgs = new static();
        $business_orgs->attributes = $params;
        return $business_orgs;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, business_org_code, production_unit_code, node_code, node_type, node_name, target_node_code, influence_coefficient, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }

}
