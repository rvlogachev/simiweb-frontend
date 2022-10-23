<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Query;

/**
 * This is the model class for table "invest_types_spr".
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $short_name
 * @property string|null $name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class InvestTypesSpr extends \yii\db\ActiveRecord
{
    use SoftDeleteTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invest_types_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['short_name'], 'string', 'max' => 50],
            [['code'], 'string', 'max' => 10],
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
            'id' => 'ИД ипа инвестиций',
            'code' => 'Код типа инвестиций',
            'short_name' => 'Краткое наименование типа инвестиций',
            'name' => 'Наименование типа инвестиций',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'deleted_at' => 'Дата удаления',
        ];
    }

    public static function findByParams($search = null, $trashed_button = null)
    {
        $query = (new Query())
            ->select('invest_types_spr.id,
            invest_types_spr.code,
            invest_types_spr.short_name,
            invest_types_spr.name,
            invest_types_spr.created_at,
            invest_types_spr.updated_at,
            invest_types_spr.deleted_at')
            ->from('invest_types_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(invest_types_spr.code)', strtolower($search)])
                ->orWhere(['like', 'upper(invest_types_spr.code)', strtoupper($search)])
                ->orWhere(['like', 'invest_types_spr.code', $search])
                ->orWhere(['like', 'invest_types_spr.short_name', $search])
                ->orWhere(['like', 'lower(invest_types_spr.short_name)', strtolower($search)])
                ->orWhere(['like', 'upper(invest_types_spr.short_name)', strtoupper($search)])
                ->orWhere(['like', 'invest_types_spr.name', $search])
                ->orWhere(['like', 'lower(invest_types_spr.name)', strtolower($search)])
                ->orWhere(['like', 'upper(invest_types_spr.name)', strtoupper($search)]);

        }
        if ($trashed_button != 'true') {
            $query->andWhere([ 'invest_types_spr.deleted_at' => null]);
        }
        $query->orderBy('invest_types_spr.name ASC');

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
            ->select('code, name')
            ->from('invest_types_spr')
            ->orderBy('code')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $invest_types = new static();
        $invest_types->attributes = $params;
        return $invest_types;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, code, short_name, name, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
}
