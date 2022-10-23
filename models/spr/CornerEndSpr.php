<?php

namespace app\models\spr;

use Yii;
use yii\db\Query;
use yii\data\ActiveDataProvider;
use app\components\SoftDeleteTrait;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "redevs_spr".
 *
 * @property int $id
 * @property string $node_code
 * * @property string $node_name
 * @property string|null $short_name
 * @property string|null $node_type
 * @property string|null $business_org_code
 * @property string|null $production_unit_code
 * @property int|null $period
 * @property int|null $level
 * @property int|null $delay_time
 * @property float|null $max_power
 * @property float|null $nzp_max_volume
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 *
 * @property ProductsSpr[] $productsSprs
 * @property BusinessOrgsSpr $businessOrgCode
 * @property ProductionUnitsSpr $productionUnitCode
 * @property TransportSpr[] $transportSprs
 */
class CornerEndSpr extends \yii\db\ActiveRecord
{
    use SoftDeleteTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'redevs_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['node_code', 'node_name', 'business_org_code', 'production_unit_code',], 'required'],
            [['level', 'delay_time', 'period'], 'default', 'value' => null],
            [['level', 'delay_time', 'period'], 'integer', 'min' => 0],
            [['max_power', 'nzp_max_volume'], 'number', 'min' => 0],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['node_code'], 'string', 'max' => 50],
            [['node_type'], 'string', 'max' => 1],
            [['business_org_code'], 'string', 'max' => 4],
            [['production_unit_code'], 'string', 'max' => 20],
            [['node_name', 'short_name'], 'string', 'max' => 512],
            [['node_code'], 'unique'],
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
            'id' => 'ИД передела',
            'node_code' => 'Код передела',
            'node_type' => 'Тип вершины',
            'business_org_code' => 'Код БЕ',
            'production_unit_code' => 'Код ПЕ',
            'node_name' => 'Наименование передела',
            'short_name' => 'Краткое наименование передела',
            'level' => 'Уровень',
            'period' => 'Период технологического процесса',
            'delay_time' => 'Задержка технологического процесса',
            'max_power' => 'Максимальная производительность передела т/сутки',
            'nzp_max_volume' => 'Максимальный объем НЗП в тоннах',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
        ];
    }
    /**
     * Gets query for [[ProductsSprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductsSprs()
    {
        return $this->hasMany(ProductsSpr::className(), ['redev_code' => 'node_code']);
    }

    /**
     * Gets query for [[TransportSprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransportSprs()
    {
        return $this->hasMany(TransportSpr::className(), ['redev_code' => 'node_code']);
    }

    public static function getPairs()
    {
        $pairs = (new Query())
            ->select( 'node_code, node_name')
            ->from('redevs_spr')
            ->orderBy('node_name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getBusinessOrgs()
    {
        $pairs = (new Query())
            ->select( 'redevs_spr.business_org_code, business_orgs_spr.node_name')
            ->distinct(true)
            ->from('redevs_spr')
            ->leftJoin('business_orgs_spr', 'business_orgs_spr.business_org_code = redevs_spr.business_org_code')
            ->where(['redevs_spr.deleted_at' => null])
            ->all();
        return $pairs;
    }

    public function getLogicalNodesSprs()
    {
        return $this->hasMany(LogicalNodesSpr::className(), ['redev_code' => 'node_code']);
    }

    public static function getProductionUnits()
    {
        $pairs = (new Query())
            ->select( 'redevs_spr.production_unit_code , production_units_spr.node_name')
            ->distinct(true)
            ->from('redevs_spr')
            ->leftJoin('production_units_spr', 'production_units_spr.production_unit_code = redevs_spr.production_unit_code')
            ->where(['redevs_spr.deleted_at' => null])
            ->all();
        return $pairs;
    }
    public static function findByParams($search = null, $trashed_button = null, $business_org_code = null,
        $production_unit_code = null, $node_type = null)
    {
        $query = (new Query())
            ->select('
            redevs_spr.id,
            redevs_spr.node_code,
            redevs_spr.node_type,
            redevs_spr.business_org_code,
            redevs_spr.production_unit_code, 
            redevs_spr.node_name,
            redevs_spr.short_name,
            redevs_spr.period,
            redevs_spr.level,
            redevs_spr.delay_time,
            redevs_spr.max_power, 
            redevs_spr.nzp_max_volume,
            redevs_spr.created_at,
            redevs_spr.updated_at,
            redevs_spr.deleted_at')->andWhere(['redevs_spr.node_type' => 'G'])
            ->from('redevs_spr');

        if (!empty($search)) {
            $query->
            andWhere(['like', 'lower(redevs_spr.node_name)', strtolower($search)])
                ->orWhere(['like', 'upper(redevs_spr.node_name)', strtoupper($search)])
                ->orWhere(['like', 'redevs_spr.node_name', $search])
                ->orWhere(['like', 'redevs_spr.business_org_code', $search])
                ->orWhere(['like', 'lower(redevs_spr.business_org_code)', strtolower($search)])
                ->orWhere(['like', 'upper(redevs_spr.business_org_code)', strtoupper($search)])
                ->orWhere(['like', 'redevs_spr.production_unit_code', $search])
                ->orWhere(['like', 'lower(redevs_spr.production_unit_code)', strtolower($search)])
                ->orWhere(['like', 'upper(redevs_spr.production_unit_code)', strtoupper($search)])
                ->orWhere(['like', 'redevs_spr.node_code', $search])
                ->orWhere(['like', 'lower(redevs_spr.node_code)', strtolower($search)])
                ->orWhere(['like', 'upper(redevs_spr.node_code)', strtoupper($search)])
                ->orWhere(['like', 'redevs_spr.short_name', $search])
                ->orWhere(['like', 'lower(redevs_spr.short_name)', strtolower($search)])
                ->orWhere(['like', 'upper(redevs_spr.short_name)', strtoupper($search)])
                ->orWhere(['like', 'redevs_spr.node_type', $search])
                ->orWhere(['like', 'upper(redevs_spr.node_type)', strtolower($search)])
                ->orWhere(['like', 'upper(redevs_spr.node_type)', strtoupper($search)])
                ->orWhere(['like', 'lower(redevs_spr.production_unit_code)', strtolower($search)])
                ->orWhere(['like', 'upper(redevs_spr.production_unit_code)', strtoupper($search)])
//                ->orWhere(['redevs_spr.period' => $query, $search])
//                ->orWhere(['like', 'redevs_spr.delay_time', $search])
//                ->orWhere(['like', 'redevs_spr.max_power', $search])
//                ->orWhere(['like', 'redevs_spr.nzp_max_volume', $search])
            ;
        }
        if ($trashed_button != 'true') {
            $query->andWhere([ 'redevs_spr.deleted_at' => null]);
        }

        if ($business_org_code ) {
            $query->andWhere(['like', 'redevs_spr.business_org_code',  $business_org_code ]) ;
        }

        if ($production_unit_code ) {
            $query->andWhere(['like', 'redevs_spr.production_unit_code',  $production_unit_code ]) ;
        }

        if ($node_type ) {
            $query->andWhere(['like', 'redevs_spr.node_type',  $node_type ]) ;
        }




        $query->orderBy('redevs_spr.node_name ASC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);

        return $dataProvider;
    }

    public static function fromArray(array $params = [])
    {
        $redevs = new static();
        $redevs->attributes = $params;

        return $redevs;
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'value' => date('Y-m-d H:i:s')
            ],
        ];
    }
    public static function findById($id)
    {
        return static::find()
            ->select('id, node_code, node_type, business_org_code, production_unit_code, node_name, short_name, level, period, delay_time, max_power, nzp_max_volume, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
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
    /**
     * Gets query for [[ProductionUnitCode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductionUnitCode()
    {
        return $this->hasOne(ProductionUnitsSpr::className(), ['production_unit_code' => 'production_unit_code']);
    }



}
