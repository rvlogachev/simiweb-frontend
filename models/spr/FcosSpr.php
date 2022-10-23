<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "fcos_spr".
 *
 * @property int $id
 * @property string $business_org_code
 * @property string|null $plan_fabric
 * @property string $code
 * @property string $name
 * @property string|null $short_name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 *
 * @property BusinessOrgsSpr $businessOrgCode
 */
class FcosSpr extends \yii\db\ActiveRecord
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
        return 'fcos_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['business_org_code', 'code', 'name'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['business_org_code', 'plan_fabric'], 'string', 'max' => 4],
            [['code'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 512],
            [['short_name'], 'string', 'max' => 50],
            [['code'], 'unique'],
            [['business_org_code'], 'exist', 'skipOnError' => true, 'targetClass' => BusinessOrgsSpr::className(), 'targetAttribute' => ['business_org_code' => 'business_org_code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД ГП',
            'business_org_code' => 'Код БЕ',
            'plan_fabric' => 'Код планирующего завода',
            'code' => 'Код ГП',
            'name' => 'Наименование ГП в SAP',
            'short_name' => 'Краткое наименование ГП для отчетов',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
        ];
    }

    public static function findByParams($search = null, $trashed_button = null, $business_org_code = null)
    {
        $query = (new Query())
            ->select('
             fcos_spr.id,
             fcos_spr.business_org_code,
             fcos_spr.plan_fabric,
             fcos_spr.code,
             fcos_spr.name,
             fcos_spr.short_name,
             fcos_spr.created_at,
             fcos_spr.updated_at,
             fcos_spr.deleted_at')
            ->from('fcos_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(fcos_spr.name)', strtolower($search)])
                ->orWhere(['like', 'upper(fcos_spr.name)', strtoupper($search)])
                ->orWhere(['like', 'fcos_spr.name', $search])
                ->orWhere(['like', 'fcos_spr.business_org_code', $search])
                ->orWhere(['like', 'lower(fcos_spr.business_org_code)', strtolower($search)])
                ->orWhere(['like', 'upper(fcos_spr.business_org_code)', strtoupper($search)])
                ->orWhere(['like', 'fcos_spr.plan_fabric', $search])
                ->orWhere(['like', 'lower(fcos_spr.plan_fabric)', strtolower($search)])
                ->orWhere(['like', 'upper(fcos_spr.plan_fabric)', strtoupper($search)])
                ->orWhere(['like', 'fcos_spr.code', $search])
                ->orWhere(['like', 'lower(fcos_spr.code)', strtolower($search)])
                ->orWhere(['like', 'upper(fcos_spr.code)', strtoupper($search)])
                ->orWhere(['like', 'fcos_spr.short_name', $search])
                ->orWhere(['like', 'lower(fcos_spr.short_name)', strtolower($search)])
                ->orWhere(['like', 'upper(fcos_spr.short_name)', strtoupper($search)])
            ;

        }
        if ($business_org_code ) {
            $query->andWhere(['like', 'fcos_spr.business_org_code',  $business_org_code ]) ;
        }
        if ($trashed_button != 'true') {
            $query->andWhere([ 'fcos_spr.deleted_at' => null]);
        }

        $query->orderBy('fcos_spr.name ASC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);

        return $dataProvider;
    }

    public static function getBusinessOrgs()
    {
        $pairs = (new Query())
            ->select( 'fcos_spr.business_org_code, business_orgs_spr.node_name')
            ->distinct(true)
            ->from('fcos_spr')
            ->leftJoin('business_orgs_spr', 'business_orgs_spr.business_org_code = fcos_spr.business_org_code')
            ->where(['fcos_spr.deleted_at' => null])
            ->all();
        return $pairs;
    }


    public static function getPairs()
    {
        $pairs = (new Query())
            ->select(' name, code, plan_fabric')
            ->from('fcos_spr')
            ->orderBy('name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $fcos = new static();
        $fcos->attributes = $params;
        return $fcos;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
}
