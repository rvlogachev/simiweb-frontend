<?php

namespace app\models;

use app\components\SoftDeleteTrait;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Query;

/**
 * This is the model class for table "experiment".
 *
 * @property int $id
 * @property int|null $scenario_id
 * @property int|null $business_algorythm_id
 * @property string|null $business_orgs_codes
 * @property string|null $metacreate_date
 * @property int|null $metacreate_user_id
 * @property string|null $experiment_name
 * @property string|null $final_comment
 * @property string|null $final_datetime
 * @property float|null $percent_end
 * @property int|null $state
 * @property string|null $main_state
 * @property string|null $params_for_business_algo
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class Experiment extends \yii\db\ActiveRecord
{
    use SoftDeleteTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'experiment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['scenario_id', 'business_algorythm_id', 'metacreate_user_id', 'state'], 'default', 'value' => null],
            [['scenario_id', 'business_algorythm_id', 'metacreate_user_id', 'state'], 'integer'],
            [['business_orgs_codes', 'metacreate_date', 'final_datetime', 'params_for_business_algo', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['final_comment'], 'string'],
            [['percent_end'], 'number'],
            [['experiment_name'], 'string', 'max' => 50],
            [['main_state'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'scenario_id' => 'experiment ID',
            'business_algorythm_id' => 'Business Algorythm ID',
            'business_orgs_codes' => 'Business Orgs Codes',
            'metacreate_date' => 'Metacreate Date',
            'metacreate_user_id' => 'Metacreate User ID',
            'experiment_name' => 'Experiment Name',
            'final_comment' => 'Final Comment',
            'final_datetime' => 'Final Datetime',
            'percent_end' => 'Percent End',
            'state' => 'State',
            'main_state' => 'Main State',
            'params_for_business_algo' => 'Params For Business Algo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
    public static function findByParams($search = null, $trashed = null  )
    {
        $query = (new Query())
            ->select('experiment.id, experiment.scenario_id, experiment.business_algorythm_id, experiment.business_orgs_codes, 
            experiment.metacreate_date,  
            experiment.metacreate_user_id, experiment.experiment_name, experiment.final_comment, experiment.final_datetime,
            experiment.percent_end, experiment.state, experiment.main_state,  
            experiment.params_for_business_algo,  
           experiment.created_at, experiment.updated_at, experiment.deleted_at')
            ->from('experiment');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(experiment.scenario_name)', strtolower($search)])
                ->orWhere(['like', 'upper(experiment.scenario_name)', strtoupper($search)])
                ->orWhere(['like', 'experiment.one_or_three', $search])
                ->orWhere(['like', 'experiment.start_yer', $search])
            ;

        }


        if ($trashed === 'with') {
        } elseif ($trashed === 'only') {
            $query->andWhere(['not', ['experiment.deleted_at' => null]]);
        } else {
            $query->andWhere(['experiment.deleted_at' => null]);
        }

        $query->orderBy('experiment.experiment_name ASC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
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
            ->select('id, product_name, business_org_code')
            ->from('experiment')
            ->orderBy('product_name')
            ->where(['deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function fromArray(array $params = [])
    {
        $business_orgs = new static();
        $business_orgs->attributes = $params;
        return $business_orgs;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, scenario_id, business_algorythm_id, business_orgs_codes, 
            metacreate_date,  
            metacreate_user_id, experiment_name, final_comment, final_datetime,
            percent_end, state, main_state,  
            params_for_business_algo,  
           created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
}
