<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "departments_spr".
 *
 * @property int $id
 * @property string $business_org_code
 * @property string $code
 * @property string|null $short_name
 * @property string $name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class DepartmentsSpr extends \yii\db\ActiveRecord
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
        return 'departments_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['business_org_code', 'code', 'name'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['business_org_code'], 'string', 'max' => 10],
            [['code'], 'string', 'max' => 20],
            [['short_name'], 'string', 'max' => 50],
            [['name'], 'string', 'max' => 512],
            [['code'], 'unique'],
            [['business_org_code'], 'exist', 'skipOnError' => true, 'targetClass' => BusinessOrgsSpr::className(), 'targetAttribute' => ['business_org_code' => 'business_org_code']],
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
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД цеха',
            'business_org_code' => 'Код БЕ',
            'code' => 'Код цеха',
            'short_name' => 'Краткое наименование цеха',
            'name' => 'Наименование цеха',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
        ];
    }

    public static function findByParams($search = null, $trashed_button = null, $business_org_code = null)
    {
        $query = (new Query())
            ->select('
            departments_spr.id,
            departments_spr.business_org_code,
            departments_spr.code,
            departments_spr.short_name,
            departments_spr.name,
            departments_spr.created_at,
            departments_spr.updated_at,
            departments_spr.deleted_at')
            ->from('departments_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'departments_spr.code', $search])
                ->orWhere(['like', 'lower(departments_spr.name)', strtolower($search)])
                ->orWhere(['like', 'upper(departments_spr.name)', strtoupper($search)])
                ->orWhere(['like', 'departments_spr.name', $search])
                ->orWhere(['like', 'lower(departments_spr.short_name)', strtolower($search)])
                ->orWhere(['like', 'upper(departments_spr.short_name)', strtoupper($search)])
                ->orWhere(['like', 'departments_spr.short_name', $search])
                ->orWhere(['like', 'lower(departments_spr.code)', strtolower($search)])
                ->orWhere(['like', 'upper(departments_spr.code)', strtoupper($search)])
                ->orWhere(['like', 'lower(departments_spr.business_org_code)', strtolower($search)])
                ->orWhere(['like', 'upper(departments_spr.business_org_code)', strtoupper($search)])
                ->orWhere(['like', 'departments_spr.business_org_code', $search]);
        }

        if ($trashed_button == 'true') {
        } else {
            $query->andWhere([ 'departments_spr.deleted_at' => null]);
        }
        if ($business_org_code ) {
            $query->andWhere(['like', 'departments_spr.business_org_code',  $business_org_code ]) ;
        }
        $query->orderBy('departments_spr.id ASC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);

        return $dataProvider;
    }

    public static function getPairs()
    {
        $pairs = (new Query())
            ->select('id, code, short_name')
            ->from('departments_spr')
            ->orderBy('id')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getBusinessOrgs()
    {
        $pairs = (new Query())
            ->select( 'departments_spr.business_org_code, business_orgs_spr.node_name')
            ->distinct(true)
            ->from('departments_spr')
            ->leftJoin('business_orgs_spr', 'business_orgs_spr.business_org_code = departments_spr.business_org_code')
            ->where(['departments_spr.deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $departments = new static();
        $departments->attributes = $params;
        return $departments;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
}
