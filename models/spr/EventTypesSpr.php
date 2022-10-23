<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "event_types_spr".
 *
 * @property int $id
 * @property string $code
 * @property string $invest_types_code
 * @property string $name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class EventTypesSpr extends \yii\db\ActiveRecord
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
        return 'event_types_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invest_types_code', 'name'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['code', 'invest_types_code'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 512],
            [['invest_types_code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД типа мероприятия',
            'code' => 'Код типа мероприятия (ВРТ)',
            'invest_types_code' => 'Соответствие для выгрузки операционных мероприятий',
            'name' => 'Наименование вида работ ТОРО',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
        ];
    }

    public static function findByParams($search = null, $trashed_button = null)
    {
        $query = (new Query())
            ->select(
                'event_types_spr.id,
                 event_types_spr.code,
                 event_types_spr.invest_types_code,  
                 event_types_spr.name,  
                 event_types_spr.created_at,
                 event_types_spr.updated_at,
                 event_types_spr.deleted_at')
            ->from('event_types_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(event_types_spr.name)', strtolower($search)])
                ->orWhere(['like', 'upper(event_types_spr.name)', strtoupper($search)])
                ->orWhere(['like', 'event_types_spr.name', $search])
                ->orWhere(['like', 'event_types_spr.code', $search])
                ->orWhere(['like', 'lower(event_types_spr.code)', strtolower($search)])
                ->orWhere(['like', 'upper(event_types_spr.code)', strtoupper($search)])
                ->orWhere(['like', 'upper(event_types_spr.invest_types_code)', strtoupper($search)])
                ->orWhere(['like', 'event_types_spr.invest_types_code', $search])
                ->orWhere(['like', 'lower(event_types_spr.invest_types_code)', strtolower($search)]);

        }

        if ($trashed_button != 'true') {
            $query->andWhere([ 'event_types_spr.deleted_at' => null]);
        }

        $query->orderBy('event_types_spr.name ASC');

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
            ->select(' code, name')
            ->from('event_types_spr')
            ->orderBy('name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $event_type = new static();
        $event_type->attributes = $params;
        return $event_type;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, code, invest_types_code, name, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
}
