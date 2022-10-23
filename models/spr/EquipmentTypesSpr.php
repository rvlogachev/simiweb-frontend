<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "equipment_types_spr".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class EquipmentTypesSpr extends \yii\db\ActiveRecord
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
        return 'equipment_types_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['code'], 'string', 'max' => 1],
            [['name'], 'string', 'max' => 512],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Код типа ЕО',
            'name' => 'Наименование типа оборудования',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
        ];
    }

    public static function findByParams($search = null, $trashed_button = null)
    {
        $query = (new Query())
            ->select(
                'equipment_types_spr.id,
                 equipment_types_spr.code,
                 equipment_types_spr.name,  
                 equipment_types_spr.created_at,
                 equipment_types_spr.updated_at,
                 equipment_types_spr.deleted_at')
            ->from('equipment_types_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(equipment_types_spr.name)', strtolower($search)])
                ->orWhere(['like', 'upper(equipment_types_spr.name)', strtoupper($search)])
                ->orWhere(['like', 'equipment_types_spr.name', $search])
                ->orWhere(['like', 'lower(equipment_types_spr.code)', strtolower($search)])
                ->orWhere(['like', 'upper(equipment_types_spr.code)', strtoupper($search)])
                ->orWhere(['like', 'equipment_types_spr.code', $search]);
        }

        if ($trashed_button != 'true') {
            $query->andWhere([ 'equipment_types_spr.deleted_at' => null]);
        }

        $query->orderBy('equipment_types_spr.name ASC');

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
            ->from('equipment_types_spr')
            ->orderBy('name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $equipment_type = new static();
        $equipment_type->attributes = $params;
        return $equipment_type;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, code, name, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }

}
