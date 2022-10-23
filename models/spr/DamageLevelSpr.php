<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;
/**
 * This is the model class for table "damage_level_spr".
 *
 * @property int $id
 * @property string|null $short_name
 * @property string $name
 * @property float $damage_level
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class DamageLevelSpr extends \yii\db\ActiveRecord
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
        return 'damage_level_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'min_damage_level','max_damage_level'], 'required'],
            [['damage_level'], 'number'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['name'], 'string', 'max' => 512],
            [['code'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Код уровня ущерба',
            'name' => 'Наименование уровня ущерба',
            'min_damage_level' => 'Нижняя граница значения уровня ущерба',
            'max_damage_level' => 'Верхняя граница значения уровня ущерба',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
        ];
    }

    public static function findByParams($search = null, $trashed_button = null)
    {
        $query = (new Query())
            ->select('
            damage_level_spr.id, 
            damage_level_spr.code, 
            damage_level_spr.name,
            damage_level_spr.min_damage_level,
            damage_level_spr.max_damage_level,
            damage_level_spr.created_at,
            damage_level_spr.updated_at,
            damage_level_spr.deleted_at')
            ->from('damage_level_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(damage_level_spr.name)', strtolower($search)])
                ->orWhere(['like', 'upper(damage_level_spr.name)', strtoupper($search)])
                ->orWhere(['like', 'damage_level_spr.name', $search])
                ->orWhere(['like', 'upper(damage_level_spr.code)', strtoupper($search)])
                ->orWhere(['like', 'damage_level_spr.code', $search])
                ->orWhere(['like', 'lower(damage_level_spr.code)', strtolower($search)]);
        }
        if ($trashed_button == 'true') {
        } else {
            $query->andWhere([ 'damage_level_spr.deleted_at' => null]);
        }

        $query->orderBy('damage_level_spr.code ASC');

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
            ->select(' code, name, min_damage_level, max_damage_level')
            ->from('damage_level_spr')
            ->orderBy('name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $damage_level = new static();
        $damage_level->attributes = $params;
        return $damage_level;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, name,  code, min_damage_level, max_damage_level, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }

}
