<?php

namespace app\models\spr;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * This is the model class for table "index_score_level_spr".
 *
 * @property int $id
 * @property int $set_id
 * @property int $score
 * @property int $index_level_depreciation
 * @property float|null $index_level_ebitda_loss
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class IndexScoreLevelSpr extends \yii\db\ActiveRecord
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
        return 'index_score_level_spr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['set_id', 'score', 'index_level_depreciation'], 'required'],
            [['set_id', 'score', 'index_level_depreciation'], 'default', 'value' => null],
            [['set_id', 'score', 'index_level_depreciation'], 'integer', 'min' => 0],
            [['index_level_ebitda_loss'], 'number', 'min' => 0],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['set_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'set_id' => 'Set ID',
            'score' => 'Score',
            'index_level_depreciation' => 'Index Level Depreciation',
            'index_level_ebitda_loss' => 'Index Level Ebitda Loss',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    public static function findByParams($search = null, $trashed_button = null)
    {
        $query = (new Query())
            ->select(
                'index_score_level_spr.id,
                 index_score_level_spr.set_id,
                 index_score_level_spr.score,
                 index_score_level_spr.index_level_depreciation,  
                 index_score_level_spr.index_level_ebitda_loss,  
                 index_score_level_spr.created_at,
                 index_score_level_spr.updated_at,
                 index_score_level_spr.deleted_at')
            ->from('index_score_level_spr');

//        if (!empty($search)) {
//            $query->andWhere(['like', 'lower(index_score_level_spr.set_id)', strtolower($search)])
//                ->orWhere(['like', 'upper(index_score_level_spr.set_id)', strtoupper($search)])
//                ->orWhere(['like', 'index_score_level_spr.set_id', $search])
//                ->orWhere(['like', 'index_score_level_spr.index_level_depreciation', $search]);
////                ->orWhere(['like', 'upper(criticals_spr.invest_types_code)', strtoupper($search)])
////                ->orWhere(['like', 'criticals_spr.invest_types_code', $search])
////                ->orWhere(['like', 'lower(criticals_spr.invest_types_code)', strtolower($search)]);
//
//        }

        if ($trashed_button == 'true') {
        } else {
            $query->andWhere([ 'index_score_level_spr.deleted_at' => null]);
        }

        $query->orderBy('index_score_level_spr.id DESC');

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
            ->select(' set_id, score')
            ->from('index_score_level_spr')
            ->orderBy('id')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $index_score_level = new static();
        $index_score_level->attributes = $params;
        return $index_score_level;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, set_id, score, index_level_depreciation, index_level_ebitda_loss, created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
}
