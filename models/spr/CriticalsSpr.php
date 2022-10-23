<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "criticals_spr".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class CriticalsSpr extends \yii\db\ActiveRecord
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
        return 'criticals_spr';
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
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД Индекса критичности',
            'code' => 'Значение индекса критичности (Код ABC в SAP)',
            'name' => 'Наименование критичности ABC единицы оборудования',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
        ];
    }

    public static function findByParams($search = null, $trashed_button = null)
    {
        $query = (new Query())
            ->select(
                'criticals_spr.id,
                 criticals_spr.code,
                 criticals_spr.name,  
                 criticals_spr.created_at,
                 criticals_spr.updated_at,
                 criticals_spr.deleted_at')
            ->from('criticals_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(criticals_spr.name)', strtolower($search)])
                ->orWhere(['like', 'upper(criticals_spr.name)', strtoupper($search)])
                ->orWhere(['like', 'criticals_spr.name', $search])
                ->orWhere(['like', 'criticals_spr.code', $search])
                ->orWhere(['like', 'lower(criticals_spr.code)', strtolower($search)])
                ->orWhere(['like', 'upper(criticals_spr.code)', strtoupper($search)]);


        }

        if ($trashed_button == 'true') {
        } else {
            $query->andWhere([ 'criticals_spr.deleted_at' => null]);
        }

        $query->orderBy('criticals_spr.name ASC');

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
            ->from('criticals_spr')
            ->orderBy('name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $criticals = new static();
        $criticals->attributes = $params;
        return $criticals;
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
