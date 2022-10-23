<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "units_spr".
 *
 * @property int $id
 * @property string $unit_code
 * @property float|null $k_kg
 * @property int $base_mass
 * @property string|null $short_name
 * @property string $unit_name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class UnitsSpr extends \yii\db\ActiveRecord
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
        return 'units_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unit_code', 'base_mass', 'unit_name'], 'required'],
            [['k_kg'], 'number', 'min' => 0],
            [['base_mass'], 'default', 'value' => null],
            [['base_mass'], 'integer'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['unit_code'], 'string', 'max' => 10],

            [['short_name'], 'string', 'max' => 50],
            [['unit_name'], 'string', 'max' => 512],
            [['unit_code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД единицы измерения',
            'unit_code' => 'Код единицы измерения',
            'k_kg' => 'Коэффициент к киллограмму (для масс)',
            'base_mass' => 'Базовая единица измерения',
            'short_name' => 'Краткое наименование единицы измерения',
            'unit_name' => 'Наименование единицы измерения',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
        ];
    }

    public static function findByParams($search = null, $trashed_button = null)
    {
        $query = (new Query())
            ->select('units_spr.id,
                      units_spr.unit_code, 
                      units_spr.k_kg,
                      units_spr.base_mass,
                      units_spr.short_name,
                      units_spr.unit_name,
                      units_spr.created_at,
                      units_spr.updated_at,
                      units_spr.deleted_at')
            ->from('units_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(units_spr.unit_name)', strtolower($search)])
                ->orWhere(['like', 'upper(units_spr.unit_name)', strtoupper($search)])
                ->orWhere(['like', 'units_spr.unit_name', $search])
                ->orWhere(['like', 'units_spr.unit_code', $search])
                ->orWhere(['like', 'upper(units_spr.unit_code)', strtoupper($search)])
                ->orWhere(['like', 'lower(units_spr.unit_code)', strtolower($search)])
                ->orWhere(['like', 'upper(units_spr.unit_code)', strtoupper($search)])
                ->orWhere(['like', 'units_spr.short_name', $search])
                ->orWhere(['like', 'lower(units_spr.short_name)', strtolower($search)]);

            if (is_numeric($search)) {
                $query->orWhere(['units_spr.k_kg'=>$search]) ;
            }
            if (is_int($search)) {
                $query->orWhere(['units_spr.base_mass'=>$search]);
            }


        }


        if ($trashed_button != 'true') {
            $query->andWhere([ 'units_spr.deleted_at' => null]);
        }

        $query->orderBy('units_spr.unit_name ASC');

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
            ->select('  unit_name, unit_code')
            ->from('units_spr')
            ->orderBy('unit_name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $units = new static();
        $units->attributes = $params;
        return $units;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, unit_code,   k_kg, base_mass, short_name, unit_name, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
}
