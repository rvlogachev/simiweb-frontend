<?php

namespace app\models;

use app\components\SoftDeleteTrait;
use Yii;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\db\Query;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $name_scenario
 * @property date $year_scenario
 * @property string|null $creator
 * @property date|null $date_at
 */
class ScenarioVersion extends ActiveRecord
{
    use SoftDeleteTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ScenarioVersion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_scenario', 'year_scenario', 'creator'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_scenario' => 'Name Scenario',
            'year_scenario' => 'Year Scenario',
            'creator' => 'Creator',
            'date_at' => 'Date at',
        ];
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'value' => date('Y-m-d H:i:s')
            ],
            [
                'class' => AttributeBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'id',
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'id'
                ],
                'value' => function () {
                    return Yii::$app->user->getIdentity()->id;
                }
            ]
        ];
    }

    /**
     * @param array $params
     * @return Organization
     */
    public static function fromArray(array $params = [])
    {
        $organization = new static();
        $organization->attributes = $params;
        return $organization;
    }

    /**
     * @param int $id
     * @return Organization|null
     */
    public static function findById($id)
    {
        return static::find()
            ->select('id, name_scenario, year_scenario, creator, date_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }

    /**
     * @param string $search
     * @param string $trashed
     * @return ActiveDataProvider
     */
    public static function findByParams($search = null, $trashed = null)
    {
        $query = (new Query())
            ->select('scenario_versions.id, scenario_versions.name_scenario, scenario_versions.year_scenario, scenario_versions.creator, scenario_versions.date_at')
            ->from('scenario_versions');

        if (!empty($search)) {
            $query->andWhere(['like', 'scenario_versions.name_scenario', $search]);
            $query->orWhere(['like', 'scenario_versions.creator', $search]);
        }

        if ($trashed === 'with') {
        } elseif ($trashed === 'only') {
            $query->andWhere(['not', ['scenario_versions.deleted_at' => null]]);
        } else {
            $query->andWhere(['scenario_versions.deleted_at' => null]);
        }

        $query->orderBy('scenario_versions.creator ASC, scenario_versions.name_scenario');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $dataProvider;
    }
}
