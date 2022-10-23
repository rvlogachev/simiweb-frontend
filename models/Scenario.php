<?php

namespace app\models;

use app\components\SoftDeleteTrait;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Query;

/**
 * This is the model class for table "scenario".
 *
 * @property int $id
 * @property int|null $one_or_three
 * @property int|null $start_year
 * @property string|null $group_be
 * @property string|null $metacreate_date
 * @property int|null $metacreate_user_id
 * @property string|null $scenario_name
 * @property string|null $description
 * @property int|null $production_graph_file_id
 * @property int|null $production_plans_file_id
 * @property int|null $macroeconomic_file_id
 * @property int|null $cost_file_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class Scenario extends \yii\db\ActiveRecord
{
    use SoftDeleteTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scenario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['one_or_three', 'start_year', 'metacreate_user_id', 'production_graph_file_id', 'production_plans_file_id', 'macroeconomic_file_id', 'cost_file_id'], 'default', 'value' => null],
            [['one_or_three', 'start_year', 'metacreate_user_id', 'production_graph_file_id', 'production_plans_file_id', 'macroeconomic_file_id', 'cost_file_id'], 'integer'],
            [['group_be', 'metacreate_date', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['scenario_name', 'description'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'one_or_three' => 'One Or Three',
            'start_year' => 'Start Year',
            'group_be' => 'Group Be',
            'metacreate_date' => 'Metacreate Date',
            'metacreate_user_id' => 'Metacreate User ID',
            'scenario_name' => 'Scenario Name',
            'description' => 'Description',
            'production_graph_file_id' => 'Production Graph File ID',
            'production_plans_file_id' => 'Production Plans File ID',
            'macroeconomic_file_id' => 'Macroeconomic File ID',
            'cost_file_id' => 'Cost File ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
    public static function findByParams($search = null, $trashed = null  )
    {
        $query = (new Query())
            ->select('scenario.id, scenario.one_or_three, scenario.start_year, scenario.group_be, 
            scenario.metacreate_date,  
            scenario.metacreate_user_id, scenario.scenario_name, scenario.description, scenario.production_graph_file_id,
            scenario.production_plans_file_id, scenario.macroeconomic_file_id, scenario.cost_file_id,  
           scenario.created_at, scenario.updated_at, scenario.deleted_at')
            ->from('scenario');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(scenario.scenario_name)', strtolower($search)])
                ->orWhere(['like', 'upper(scenario.scenario_name)', strtoupper($search)])
                ->orWhere(['like', 'scenario.one_or_three', $search])
                ->orWhere(['like', 'scenario.start_yer', $search])
                 ;

        }


        if ($trashed === 'with') {
        } elseif ($trashed === 'only') {
            $query->andWhere(['not', ['scenario.deleted_at' => null]]);
        } else {
            $query->andWhere(['scenario.deleted_at' => null]);
        }

        $query->orderBy('scenario.scenario_name ASC');

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
            ->select('id, scenario_name ')
            ->from('scenario')
            ->orderBy('scenario_name')
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
            ->select('id, one_or_three, start_year, group_be, 
            metacreate_date,  
            metacreate_user_id, scenario_name, description, production_graph_file_id,
            production_plans_file_id, macroeconomic_file_id, cost_file_id,  
           created_at, updated_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }
    
}
