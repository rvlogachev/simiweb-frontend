<?php

namespace app\models;

use app\components\SoftDeleteTrait;
use app\models\spr\BusinessOrgsSpr;
use app\models\spr\FilesSpr;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Query;

/**
 * This is the model class for table "upload_files".
 *
 * @property int $id
 * @property string|null $dataset_source_code
 * @property int $file_id
 * @property int|null $one_or_three
 * @property int|null $start_year
 * @property string|null $group_be_code
 * @property string|null $filename
 * @property string|null $file_upload_path
 * @property string|null $metaload_date
 * @property int $metaload_user_id
 * @property string|null $metaload_comment
 * @property string|null $metaagree_date
 * @property string|null $metaagree_state
 * @property int|null $metaagree_user_id
 * @property string|null $metaagree_comment
 * @property string|null $plans_for_graph_dataset_id
 * @property string|null $state_for_production_plan
 * @property string|null $state_for_graph_plan
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class UploadFiles extends \yii\db\ActiveRecord
{
    use SoftDeleteTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'upload_files';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['file_id', 'metaload_user_id'], 'required'],
            [['file_id', 'one_or_three', 'start_year', 'metaload_user_id', 'metaagree_user_id'], 'default', 'value' => null],
            [['file_id', 'one_or_three', 'start_year', 'metaload_user_id', 'metaagree_user_id'], 'integer'],
            [['group_be_code', 'metaload_date', 'metaagree_date', 'plans_for_graph_dataset_id', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['metaload_comment', 'metaagree_comment'], 'string'],
            [['dataset_source_code'], 'string', 'max' => 255],
            [['filename', 'file_upload_path'], 'string', 'max' => 512],
            [['metaagree_state'], 'string', 'max' => 50],
            [['state_for_production_plan', 'state_for_graph_plan'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dataset_source_code' => 'Dataset Source Code',
            'file_id' => 'File ID',
            'one_or_three' => 'One Or Three',
            'start_year' => 'Start Year',
            'group_be_code' => 'Group Be Code',
            'filename' => 'Filename',
            'file_upload_path' => 'File Upload Path',
            'metaload_date' => 'Metaload Date',
            'metaload_user_id' => 'Metaload User ID',
            'metaload_comment' => 'Metaload Comment',
            'metaagree_date' => 'Metaagree Date',
            'metaagree_state' => 'Metaagree State',
            'metaagree_user_id' => 'Metaagree User ID',
            'metaagree_comment' => 'Metaagree Comment',
            'plans_for_graph_dataset_id' => 'Plans For Graph Dataset ID',
            'state_for_production_plan' => 'State For Production Plan',
            'state_for_graph_plan' => 'State For Graph Plan',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
    public static function findByParams($search = null, $start_year = null, $one_or_three = null, $trashed_button = null,  $type = null)
    {
        $query = (new Query())
            ->select('upload_files.id,  
           upload_files.filename,  
           upload_files.file_id,  
           upload_files.created_at, 
           upload_files.file_upload_path, 
           upload_files.updated_at,  
           upload_files.deleted_at,  
           upload_files.one_or_three,  
           upload_files.start_year,  
           upload_files.group_be_code,  
           upload_files.state_for_graph_plan,  
           upload_files.state_for_production_plan,  
           upload_files.metaload_date,  
           upload_files.metaagree_user_id,
           upload_files.metaagree_date,
           upload_files.metaagree_state,
           upload_files.metaagree_comment,
           upload_files.metaload_comment,
           upload_files.metaload_user_id,
           upload_files.dataset_source_code,
           upload_files.plans_for_graph_dataset_id')
            ->from('upload_files');

        if (!empty($search)) {
            $query->where(['like', 'upload_files.filename', $search])
            ->orwhere(['like', 'upper(upload_files.filename)', strtoupper($search)])
            ->orwhere(['like', 'lower(upload_files.filename)', strtolower($search)])
                ->orWhere(['=', 'upload_files.start_year', intval($search)])
                ->orWhere(['=', 'upload_files.one_or_three', intval($search)])
                ->orWhere(['like', 'upload_files.metaagree_state', $search])
                ->orWhere(['like', 'upper(upload_files.metaagree_state)', strtoupper($search)])
                ->orWhere(['like', 'lower(upload_files.metaagree_state)', strtolower($search)]);

            if ($type == 'graph'){
                $query->orWhere(['like', 'upload_files.state_for_graph_plan', $search]);
            }

            $bo = BusinessOrgsSpr::findByShortName($search);
            if(!is_null($bo)){
                $query->orWhere("\"upload_files\".\"group_be_code\"->>'group_be_code' LIKE "."'%".$bo['business_org_code']."%'");
            }
        }

        if($one_or_three){
            $query->andWhere(['upload_files.one_or_three' => $one_or_three]);
        }
        if($start_year){
            $query->andWhere(['upload_files.start_year' => $start_year]);
        }
       if ($type == 'graph' && $file_id=FilesSpr::find()->where(['en_name'=>'production_graph'])->one()) {
           $query->andWhere(['file_id'=>  $file_id->id]);
       }
        if ($type == 'plan' && $file_id=FilesSpr::find()->where(['en_name'=>'production_plan'])->one()) {
            $query->andWhere(['file_id'=>  $file_id->id]);
        }
        if ($type == 'macroeconomics' && $file_id=FilesSpr::find()->where(['en_name'=>'macroeconomics'])->one()) {
            $query->andWhere(['file_id'=>  $file_id->id]);
        }
        if ($type == 'cost' && $file_id=FilesSpr::find()->where(['en_name'=>'cost'])->one()) {
            $query->andWhere(['file_id'=>  $file_id->id]);
        }
        if ($type == 'invest_event' && $file_id=FilesSpr::find()->where(['en_name'=>'invest_event'])->one()) {
            $query->andWhere(['file_id'=>  $file_id->id]);
        }

        if ($type == 'operational_event' && $file_id=FilesSpr::find()->where(['en_name'=>'operational_event'])->one()) {
            $query->andWhere(['file_id'=>  $file_id->id]);
        }

        $guides=FilesSpr::find()->select('id')->where(['like', 'filename','spr'])->asArray();

        if ($type == 'guide' && $guides) {
            $query->andWhere(['in','file_id',$guides]);
        }
        if ($trashed_button != 'true') {
            $query->andWhere([ 'upload_files.deleted_at' => null]);
        }

        $query->orderBy('upload_files.updated_at DESC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $dataProvider;
    }

    public static function findById($id)
    {
        return static::find()
            ->select('id, file_id, filename, file_upload_path, metaload_date, metaload_user_id,
            metaload_comment, metaagree_date, metaagree_state, metaagree_user_id, metaagree_comment, 
            plans_for_graph_dataset_id, state_for_production_plan, state_for_graph_plan, 
            updated_at, created_at, deleted_at')
            ->where('id=:id', ['id' => $id])
            ->asArray()
            ->one();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFile()
    {
        return $this->hasOne(FilesSpr::class, ['file_id' => 'id']);
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'value' => date('Y-m-d H:i:s')
            ],
//           [
//               'class' => AttributeBehavior::class,
//               'attributes' => [
//                   ActiveRecord::EVENT_BEFORE_INSERT => 'account_id',
//                   ActiveRecord::EVENT_BEFORE_UPDATE => 'account_id'
//               ],
//               'value' => function () {
//                   return Yii::$app->user->getIdentity()->account_id;
//               }
//           ]
        ];
    }

    public static function getProductionGraphs()
    {
        $pairs = (new Query())
            ->select('id, filename')
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"production_graph"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }


    public static function getProductionGraphsStartYear()
    {
        $pairs = (new Query())
            ->select('start_year')
            ->distinct(true)
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"production_graph"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }







    public static function getProductionGraphsOneOrThree()
    {
        $pairs = (new Query())
            ->select('one_or_three')
            ->distinct(true)
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"production_graph"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }



    public static function getProductionPlans()
    {
        $pairs = (new Query())
            ->select('id, filename')
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"production_plan"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getProductionPlanStartYear()
    {
        $pairs = (new Query())
            ->select('start_year')
            ->distinct(true)
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"production_plan"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getProductionPlanOneOrThree()
    {
        $pairs = (new Query())
            ->select('one_or_three')
            ->distinct(true)
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"production_plan"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getMacroeconomics()
    {
        $pairs = (new Query())
            ->select('id, filename')
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"macroeconomics"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getMacroeconomicsStartYear()
    {
        $pairs = (new Query())
            ->select('start_year')
            ->distinct(true)
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"macroeconomics"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getMacroeconomicsOneOrThree()
    {
        $pairs = (new Query())
            ->select('one_or_three')
            ->distinct(true)
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"macroeconomics"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getCosts()
    {
        $pairs = (new Query())
            ->select('id, filename')
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"cost"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getCostStartYear()
    {
        $pairs = (new Query())
            ->select('start_year')
            ->distinct(true)
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"cost"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getCostOneOrThree()
    {
        $pairs = (new Query())
            ->select('one_or_three')
            ->distinct(true)
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"cost"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getInvestEvents()
    {
        $pairs = (new Query())
            ->select('id, filename')
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"invest_event"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getOperationalEvents()
    {
        $pairs = (new Query())
            ->select('id, filename')
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"operational_event"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getReestrTprs()
    {
        $pairs = (new Query())
            ->select('id, filename')
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"reestr_tpr"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getFailureShedules()
    {
        $pairs = (new Query())
            ->select('id, filename')
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"failure_shedule"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }

    public static function getPnds()
    {
        $pairs = (new Query())
            ->select('id, filename')
            ->from('upload_files')
            ->where(['file_id'=>FilesSpr::find()->where(['code'=>"pnd"])->one()->id, 'deleted_at' => null])
            ->all();
        return $pairs;
    }

}
