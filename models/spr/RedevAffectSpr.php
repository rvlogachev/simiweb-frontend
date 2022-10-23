<?php

namespace app\models\spr;

use Yii;
use yii\db\Query;
use yii\data\ActiveDataProvider;
use app\components\SoftDeleteTrait;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "redevs_affects_spr".
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $short_name
 * @property string|null $name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class RedevAffectSpr extends \yii\db\ActiveRecord
{
    use SoftDeleteTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'redev_affect_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['code'], 'string', 'max' => 10],
            [['short_name'], 'string', 'max' => 12],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'short_name' => 'Short Name',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    public static function findByParams($search = null, $trashed = null)
    {
        $query = (new Query())
            ->select('redevs_affects_spr.id, redevs_affects_spr.code, redevs_affects_spr.short_name, redevs_affects_spr.name,
            redevs_affects_spr.created_at, redevs_affects_spr.updated_at, redevs_affects_spr.deleted_at')
            ->from('redevs_affects_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'redevs_affects_spr.name', $search]);
        }

        if ($trashed === 'with') {
        } elseif ($trashed === 'only') {
            $query->andWhere(['not', ['redevs_affects_spr.deleted_at' => null]]);
        } else {
            $query->andWhere(['redevs_affects_spr.deleted_at' => null]);
        }

        $query->orderBy('redevs_affects_spr.name ASC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);

        return $dataProvider;
    }

    public static function fromArray(array $params = [])
    {
        $redevs_affects = new static();
        $redevs_affects->attributes = $params;
        return $redevs_affects;
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'value' => date('Y-m-d H:i:s')
            ],
        ];
    }
    public static function findById($id)
    {
        return static::find()
            ->select('id, name, node_type, business_org_code, production_unit_code, short_name, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }


}
