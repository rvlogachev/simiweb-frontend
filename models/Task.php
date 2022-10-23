<?php

namespace app\models;

use app\components\SoftDeleteTrait;
use app\models\query\TaskQuery;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "task".
 * @property int $task_id
 * @property string $task_type
 * @property int $status_code
 * @property string|null $status_text
 * @property string $config
 * @property int $user_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class Task extends \yii\db\ActiveRecord
{
    use SoftDeleteTrait;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_type','user_id'], 'required'],
            [['status_code'], 'integer'],
            [['deleted_at', 'created_at','config', 'error_description'], 'safe'],
            [['status_text'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'task_id' => 'ID',

        ];
    }

    /**
     * @inheritdoc
     * @return TaskQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TaskQuery(get_called_class());
    }




    public  function getBody()
    {
        $str = json_decode($this->config,true)['body'];


        return $str;

    }

    public static function findByParams($search = null )
    {
        $query = (new Query())
            ->select('task.task_id, task.task_type, task.status_code, 
            task.status_text, task.deleted_at, task.config, task.error_description,
            task.created_at ')
            ->from('task');

        if (!empty($search)) {
            $query->andWhere(['like', 'lower(task.status_text)', strtolower($search)])
                ->orWhere(['like', 'upper(task.status_text)', strtoupper($search)]) ;
        }



        $query->orderBy('task.task_id DESC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $dataProvider;
    }

    public static function fromArray(array $params = [])
    {
        $redevs = new static();
        $redevs->attributes = $params;
        return $redevs;
    }
//    public function behaviors()
//    {
//        return [
//            [
//                'class' => TimestampBehavior::class,
//                'createdAtAttribute' => 'created_at',
//                'value' => date('Y-m-d H:i:s')
//            ],
//        ];
//    }
    public static function findById($task_id)
    {
        return static::find()
            ->select(' task_id, updated_at, error_description,task_type, status_code, config, status_text, deleted_at, created_at ')
            ->where('task_id=:task_id', ['task_id' => $task_id])
            ->asArray()
            ->one();
    }


}
