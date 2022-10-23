<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;

/**
 * This is the model class for table "production_units_spr".
 *
 * @property int $id
 * @property string $production_unit_code
 * @property string $node_type
 * @property string $business_org_code
 * @property string|null $short_name
 * @property string $name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 * @property BusinessOrgsSpr $businessOrgCode
 * @property RedevsSpr[] $redevsSprs
 */
class ProductionUnitsSpr extends \yii\db\ActiveRecord
{
    use SoftDeleteTrait;


    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'value' => date('Y-m-d H:i:s')
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'production_units_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['short_name'], 'default'],
            [['production_unit_code', 'node_type', 'business_org_code', 'node_name'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['production_unit_code'], 'string', 'max' => 20],
            [['node_type'], 'string', 'max' => 1],
            [['business_org_code'], 'string', 'max' => 4],
            [['short_name'], 'string', 'max' => 50],
            [['node_name'], 'string', 'max' => 512],
            [['production_unit_code'], 'unique'],
            [['business_org_code'], 'exist', 'skipOnError' => true, 'targetClass' => BusinessOrgsSpr::className(), 'targetAttribute' => ['business_org_code' => 'business_org_code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД ПЕ',
            'node_name' => 'Наименование ПЕ',
            'production_unit_code' => 'Код ПЕ',
            'node_type' => 'Тип вершины',
            'business_org_code' => 'Код БЕ',
            'short_name' => 'Краткое наименование ПЕ',
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
     * Gets query for [[RedevsSprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRedevsSprs()
    {
        return $this->hasMany(RedevsSpr::className(), ['production_unit_code' => 'production_unit_code']);

    }
    public static function findByParams($search = null, $trashed_button = null, $business_org_code = null)
    {
        $query = (new Query())
            ->select('production_units_spr.id, production_units_spr.node_type, production_units_spr.short_name,
             production_units_spr.node_name, production_units_spr.production_unit_code,
            production_units_spr.business_org_code,
            production_units_spr.created_at, production_units_spr.updated_at, production_units_spr.deleted_at')
            ->from('production_units_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(production_units_spr.node_name)', strtolower($search)])
                ->orWhere(['like', 'upper(production_units_spr.node_name)', strtoupper($search)])
                ->orWhere(['like', 'production_units_spr.node_name', $search])
                ->orWhere(['like', 'production_units_spr.business_org_code', $search])
                ->orWhere(['like', 'production_units_spr.production_unit_code', $search])
                ->orWhere(['like', 'upper(production_units_spr.production_unit_code)', strtoupper($search)])
                ->orWhere(['like', 'lower(production_units_spr.production_unit_code)', strtolower($search)])
                ->orWhere(['like', 'upper(production_units_spr.short_name)', strtoupper($search)])
                ->orWhere(['like', 'production_units_spr.short_name', $search])
                ->orWhere(['like', 'lower(production_units_spr.short_name)', strtolower($search)]);
        }

        if ($trashed_button == 'true') {
        } else {
            $query->andWhere([ 'production_units_spr.deleted_at' => null]);
        }

        if ($business_org_code ) {
            $query->andWhere(['like', 'production_units_spr.business_org_code',  $business_org_code ]) ;
        }

        $query->orderBy('production_units_spr.node_name ASC');

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
        $production_unit = new static();
        $production_unit->attributes = $params;
        $production_unit->node_type = "E";

        return $production_unit;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, node_name, node_type, business_org_code, production_unit_code, short_name, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
    /**
     * @return array
     */
    public static function getPairs()
    {
        $pairs = (new Query())
            ->select(' node_name, production_unit_code')
            ->from('production_units_spr')
            ->orderBy('node_name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

}
