<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "business_algorythms_spr".
 *
 * @property int $id
 * @property string|null $short_name
 * @property string $name
 * @property string $code
 * @property string|null $params
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class BusinessAlgorythmsSpr extends \yii\db\ActiveRecord
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
        return 'business_algorythms_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['params', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['short_name'], 'string', 'max' => 50],
            [['name'], 'string', 'max' => 512],
            [['code'], 'string', 'max' => 20],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД БА',
            'name' => 'Наименование',
            'short_name' => 'Краткое наименовение',
            'code' => 'Код БА',
            'params' => 'Параметры',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата пометки на удаление',
        ];
    }

    public static function findByParams($search = null, $trashed_button = null)
    {
        $query = (new Query())
            ->select('
             business_algorythms_spr.id,
             business_algorythms_spr.short_name,
             business_algorythms_spr.name,
             business_algorythms_spr.code,
             business_algorythms_spr.params,
             business_algorythms_spr.created_at,
             business_algorythms_spr.updated_at,
             business_algorythms_spr.deleted_at')
            ->from('business_algorythms_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'business_algorythms_spr.name', $search])
                ->orWhere(['like', 'lower(business_algorythms_spr.name)', strtolower($search)])
                ->orWhere(['like', 'upper(business_algorythms_spr.name)', strtoupper($search)])
                ->orWhere(['like', 'business_algorythms_spr.code', $search])
                ->orWhere(['like', 'lower(business_algorythms_spr.code)', strtolower($search)])
                ->orWhere(['like', 'upper(business_algorythms_spr.code)', strtoupper($search)])
                ->orWhere(['like', 'business_algorythms_spr.short_name', $search])
                ->orWhere(['like', 'lower(business_algorythms_spr.short_name)', strtolower($search)])
                ->orWhere(['like', 'upper(business_algorythms_spr.short_name)', strtoupper($search)])
            ;
        }

        if ($trashed_button == 'true') {
        } else {
            $query->andWhere([ 'business_algorythms_spr.deleted_at' => null]);
        }

        $query->orderBy('business_algorythms_spr.name ASC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 15,
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
            ->select('id, name, code')
            ->from('business_algorythms_spr')
            ->orderBy('name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params1 = [])
    {
        $business_algorythms = new static();
        $business_algorythms->attributes = $params1;
        return $business_algorythms;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, name, short_name, code, params, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
}
