<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Query;

/**
 * This is the model class for table "transport_spr".
 *
 * @property int $id
 * @property string $node_code
 * @property string|null $node_type
 * @property string $business_org_code
 * @property string $production_unit_code
 * @property string $redev_code
 * @property string $transport_type_code
 * @property string|null $sap_code
 * @property string $node_name
 * @property string|null $tag_alternative
 * @property int|null $period
 * @property int|null $delay_time
 * @property float|null $max_power
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 * @property TransportTypeSpr $transportTypeCode
 * @property BusinessOrgsSpr $businessOrgCode
 * @property ProductionUnitsSpr $productionUnitCode
 * @property RedevsSpr $redevCode
 */
class TransportSpr extends \yii\db\ActiveRecord
{
    use SoftDeleteTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transport_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['node_code', 'business_org_code', 'production_unit_code', 'redev_code', 'transport_type_code', 'node_name'], 'required'],
            [['period', 'delay_time'], 'default', 'value' => null],
            [['period', 'delay_time'], 'integer', 'min'=> 0],
            [['max_power'], 'number', 'min'=> 0],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['node_code', 'tag_alternative'], 'string', 'max' => 50],
            [['node_type'], 'string', 'max' => 1],
            [['business_org_code'], 'string', 'max' => 4],
            [['production_unit_code'], 'string', 'max' => 20],
            [['redev_code', 'transport_type_code'], 'string', 'max' => 10],
            [['sap_code'], 'string', 'max' => 255],
            [['node_name'], 'string', 'max' => 512],
            [['node_code'], 'unique'],
            [['business_org_code'], 'exist', 'skipOnError' => true, 'targetClass' => BusinessOrgsSpr::className(), 'targetAttribute' => ['business_org_code' => 'business_org_code']],
            [['production_unit_code'], 'exist', 'skipOnError' => true, 'targetClass' => ProductionUnitsSpr::className(), 'targetAttribute' => ['production_unit_code' => 'production_unit_code']],
            [['redev_code'], 'exist', 'skipOnError' => true, 'targetClass' => RedevsSpr::className(), 'targetAttribute' => ['redev_code' => 'node_code']],
            [['transport_type_code'], 'exist', 'skipOnError' => true, 'targetClass' => TransportTypeSpr::className(), 'targetAttribute' => ['transport_type_code' => 'code']],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД транспорта',
            'node_code' => 'Код транспорта',
            'node_type' => 'Тип вершины',
            'business_org_code' => 'Код БЕ',
            'production_unit_code' => 'Код ПЕ',
            'redev_code' => 'Код передела',
            'transport_type_code' => 'Тип транспорта',
            'sap_code' => 'Код транспорта из SAP',
            'node_name' => 'Наименование транспорта',
            'tag_alternative' => 'Тэг альтернативности',
            'period' => 'Период',
            'delay_time' => 'Задержка',
            'max_power' => 'Максимальная мощность',
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

    /**
     * Gets query for [[ProductionUnitCode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductionUnitCode()
    {
        return $this->hasOne(ProductionUnitsSpr::className(), ['production_unit_code' => 'production_unit_code']);
    }

    /**
     * Gets query for [[RedevCode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRedevCode()
    {
        return $this->hasOne(RedevsSpr::className(), ['node_code' => 'redev_code']);
    }

    /**
     * Gets query for [[TransportTypeCode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransportTypeCode()
    {
        return $this->hasOne(TransportTypeSpr::className(), ['code' => 'transport_type_code']);
    }
    public static function findByParams($search = null, $trashed_button = null, $business_org_code = null, $production_unit_code = null, $transport_type_code = null )
    {
        $query = (new Query())
            ->select('transport_spr.id, transport_spr.transport_type_code, transport_spr.node_code, transport_spr.redev_code,
            transport_spr.production_unit_code, transport_spr.node_type,transport_spr.transport_type_code,
            transport_spr.business_org_code,  transport_spr.node_name,  transport_spr.tag_alternative, transport_spr.sap_code,
            transport_spr.created_at, transport_spr.updated_at, transport_spr.deleted_at')
            ->from('transport_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(transport_spr.node_name)', strtolower($search)])
                ->orWhere(['like', 'upper(transport_spr.node_name)', strtoupper($search)])
                ->orWhere(['like', 'transport_spr.node_name', $search])
                ->orWhere(['like', 'transport_spr.sap_code', $search])
                ->orWhere(['like', 'lower(transport_spr.sap_code)', strtolower($search)])
                ->orWhere(['like', 'upper(transport_spr.sap_code)', strtoupper($search)])
                ->orWhere(['like', 'transport_spr.sap_code', $search])
                ->orWhere(['like', 'lower(transport_spr.sap_code)', strtolower($search)])
                ->orWhere(['like', 'upper(transport_spr.sap_code)', strtoupper($search)])
                ->orWhere(['like', 'transport_spr.tag_alternative', $search])
                ->orWhere(['like', 'lower(transport_spr.tag_alternative)', strtolower($search)])
                ->orWhere(['like', 'upper(transport_spr.tag_alternative)', strtoupper($search)])
                ->orWhere(['like', 'transport_spr.redev_code', $search])
                ->orWhere(['like', 'lower(transport_spr.redev_code)', strtolower($search)])
                ->orWhere(['like', 'upper(transport_spr.redev_code)', strtoupper($search)])
                ->orWhere(['like', 'transport_spr.node_code', $search])
                ->orWhere(['like', 'lower(transport_spr.node_code)', strtolower($search)])
                ->orWhere(['like', 'upper(transport_spr.node_code)', strtoupper($search)])
                ->orWhere(['like', 'transport_spr.node_type', $search])
                ->orWhere(['like', 'lower(transport_spr.node_type)', strtolower($search)])
                ->orWhere(['like', 'upper(transport_spr.node_type)', strtoupper($search)])
                ->orWhere(['like', 'transport_spr.business_org_code', $search])
                ->orWhere(['like', 'lower(transport_spr.business_org_code)', strtolower($search)])
                ->orWhere(['like', 'upper(transport_spr.business_org_code)', strtoupper($search)])
                ->orWhere(['like', 'transport_spr.transport_type_code', $search])
                ->orWhere(['like', 'lower(transport_spr.transport_type_code)', strtolower($search)])
                ->orWhere(['like', 'upper(transport_spr.transport_type_code)', strtoupper($search)])
                ->orWhere(['like', 'transport_spr.production_unit_code', $search])
                ->orWhere(['like', 'lower(transport_spr.production_unit_code)', strtolower($search)])
                ->orWhere(['like', 'upper(transport_spr.production_unit_code)', strtoupper($search)]);

        }
        if ($trashed_button != 'true') {

            $query->andWhere([ 'transport_spr.deleted_at' => null]);
        }

        if ($business_org_code ) {
            $query->andWhere(['like', 'transport_spr.business_org_code',  $business_org_code ]) ;
        }

        if ($production_unit_code ) {
            $query->andWhere(['like', 'transport_spr.production_unit_code',  $production_unit_code ]) ;
        }

        if ($transport_type_code ) {
            $query->andWhere(['like', 'transport_spr.transport_type_code',  $transport_type_code ]) ;
        }



        $query->orderBy('transport_spr.node_name ASC');

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
            ->from('transport_spr')
            ->orderBy('node_name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $business_orgs = new static();
        $business_orgs->attributes = $params;
        $business_orgs->node_type = "T";
        return $business_orgs;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id,  business_org_code, production_unit_code, node_code, node_type, transport_type_code, redev_code, sap_code, 
            tag_alternative, period, delay_time, max_power, node_name, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }

}
