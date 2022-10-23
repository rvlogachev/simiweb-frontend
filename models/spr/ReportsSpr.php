<?php

namespace app\models\spr;

use Yii;
use yii\db\Query;
use yii\data\ActiveDataProvider;
use app\components\SoftDeleteTrait;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "files_spr".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $en_name
 * @property string|null $type
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class ReportsSpr extends \yii\db\ActiveRecord
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
        return 'reports_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['name'], 'string', 'max' => 512],
            [['code'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    public static function findByParams($search = null, $trashed = null, $trashed_button = null)
    {
        $query = (new Query())
            ->select('
            reports_spr.id,
            reports_spr.code,
            reports_spr.name,
            reports_spr.created_at,
            reports_spr.updated_at,
            reports_spr.deleted_at')
            ->from('reports_spr');

        if (!empty($search)) {
            $query->andWhere(['like', 'reports_spr.code', $search])
                ->orWhere(['like', 'reports_spr.name', $search])
                ->orWhere(['like', 'lower(reports_spr.code)', strtolower($search)])
                ->orWhere(['like', 'upper(reports_spr.code)', strtoupper($search)])
                ->orWhere(['like', 'lower(reports_spr.name)', strtolower($search)])
                ->orWhere(['like', 'upper(reports_spr.name)', strtoupper($search)]);
        }

        if ($trashed_button == 'true') {
        } else {
            $query->andWhere([ 'reports_spr.deleted_at' => null]);
        }

        $query->orderBy('reports_spr.id ASC');

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
            ->select('id, code, name')
            ->from('reports_spr')
            ->orderBy('id')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $reports = new static();
        $reports->attributes = $params;
        return $reports;
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
