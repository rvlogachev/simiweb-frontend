<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "business_orgs_spr".
 *
 * @property int $id
 * @property string $business_org_code
 * @property string|null $short_name
 * @property string $name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 *
 * @property FcosSpr[] $fcosSprs
 * @property ProductionUnitsSpr[] $productionUnitsSprs
 * @property RedevsSpr[] $redevsSprs
 */
class BusinessOrgsSpr extends \yii\db\ActiveRecord
{
    use SoftDeleteTrait;

    /**
     * {@inheritdoc}
     */
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
        return 'business_orgs_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['short_name'], 'default'],
            [['business_org_code', 'node_name'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['business_org_code'], 'string', 'max' => 4],
            [['short_name'], 'string', 'max' => 50],
            [['node_name'], 'string', 'max' => 512],
            [['business_org_code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД БЕ',
            'business_org_code' => 'Код БЕ',
            'short_name' => 'Краткое наименование БЕ',
            'node_name' => 'Наименование БЕ',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
        ];
    }

    public static function findByParams($search = null,  $trashed_button = null)
    {
        $query = (new Query())
            ->select('business_orgs_spr.id,
             business_orgs_spr.business_org_code,
             business_orgs_spr.short_name,
             business_orgs_spr.node_name,  
             business_orgs_spr.created_at,
             business_orgs_spr.updated_at,
             business_orgs_spr.deleted_at')
            ->from('business_orgs_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(business_orgs_spr.node_name)', strtolower($search)])
            ->orWhere(['like', 'upper(business_orgs_spr.node_name)', strtoupper($search)])
            ->orWhere(['like', 'business_orgs_spr.node_name', $search])
            ->orWhere(['like', 'business_orgs_spr.business_org_code', $search])
            ->orWhere(['like', 'upper(business_orgs_spr.business_org_code)', strtoupper($search)])
            ->orWhere(['like', 'lower(business_orgs_spr.business_org_code)', strtolower($search)])
            ->orWhere(['like', 'upper(business_orgs_spr.short_name)', strtoupper($search)])
            ->orWhere(['like', 'business_orgs_spr.short_name', $search])
            ->orWhere(['like', 'lower(business_orgs_spr.short_name)', strtolower($search)]);

        }
        if ($trashed_button == 'true') {
        } else {
            $query->andWhere([ 'business_orgs_spr.deleted_at' => null]);
        }
        $query->orderBy('business_orgs_spr.node_name ASC');
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
            ->select('  node_name, business_org_code')
            ->from('business_orgs_spr')
            ->orderBy('node_name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    /**
     * @return array
     */
    public static function getPairsShortName()
    {
        $pairs = (new Query())
            ->select('  short_name, business_org_code')
            ->from('business_orgs_spr')
            ->orderBy('short_name')
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
            ->select('id, node_name, business_org_code, short_name, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }

    public static function findByShortName($short_name)
    {
        return static::find()
            ->where(['short_name' => $short_name])
            ->asArray()
            ->one();
    }


}
