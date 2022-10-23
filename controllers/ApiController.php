<?php

namespace app\controllers;

use app\components\SharedDataFilter;
use yii\web\Controller;
use yii\db\Query;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class ApiController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index'=>['get'],
                    'view'=>['get'],
                    'create'=>['post'],
                    'update'=>['post'],
                    'delete' => ['delete'],
                    'deleteall'=>['post'],
                ],

            ]
        ];
    }

    /* This will execute before  any action */
    public function beforeAction($event)
    {

        $action = $event->id;
        if (isset($this->actions[$action])) {
            $verbs = $this->actions[$action];
        } elseif (isset($this->actions['*'])) {
            $verbs = $this->actions['*'];
        } else {
            return $event->isValid;
        }
        $verb = \Yii::$app->getRequest()->getMethod();

        $allowed = array_map('strtoupper', $verbs);

        if (!in_array($verb, $allowed)) {

            $this->setHeader(400);
            echo json_encode(array('status'=>0,'error_code'=>400,'message'=>'Method not allowed'),JSON_PRETTY_PRINT);
            exit;

        }

        return true;
    }
    public function testActionCreate(){
        $response = $this->post(
            'api/users',
            array(
                'first_name' => 'new_first_name',
                'middle_name' => 'new_middle_name',
                'last_name' => 'new_last_name',
                'password' => 'new_user_psw',
                'password_repeat' => 'new_user_psw',
                'role' => 'guest',
            ),
            array('cookies'=>$this->getAuthCookies())
        );

        $this->assertEquals($response['code'], 200);
        $this->assertNotNull($response['decoded']);
        $this->assertArrayHasKey('id', $response['decoded']);
        $this->assertArrayNotHasKey('password', $response['decoded']);
        $this->assertNotNull( User::model()->findByPk($response['decoded']['id']) );
    }

    public function actionIndex()
    {

        $params=$_REQUEST;
        $filter=array();
        $datefilter=array();
        $sort="";

        $page=1;
        $limit=10;

        if(isset($params['page']))
            $page=$params['page'];


        if(isset($params['limit']))
            $limit=$params['limit'];

        $offset=$limit*($page-1);




        if(isset($params['datefilter']))
        {
            $datefilter=(array)json_decode($params['datefilter']);
        }


        if(isset($params['sort']))
        {
            $sort=$params['sort'];
            if(isset($params['order']))
            {
                if($params['order']=="false")
                    $sort.=" desc";
                else
                    $sort.=" asc";

            }
        }

        /* Filter elements */
        if(isset($params['filter']))
        {
            $filter=(array)json_decode($params['filter']);
            $query=new Query();
            $query->offset($offset)
                ->limit($limit)
                ->from('users')
                ->andFilterWhere(['like', 'id', $filter['id']])
                ->andFilterWhere(['like', 'first_name', $filter['first_name']])
                ->andFilterWhere(['like', 'last_name', $filter['last_name']])
                ->orderBy($sort)
                ->select("id,name,age,createdAt,updatedAt");
        }else{
            $query=new Query();
            $query->offset($offset)
                ->limit($limit)
                ->from('users')
                ->orderBy($sort)
                ->select("id,first_name,last_name");
        }


     //   if($datefilter['from'])
       // {
      //      $query->andWhere("createdAt >= '".$datefilter['from']."' ");
        //}
       // if($datefilter['to'])
        //{
        //    $query->andWhere("createdAt <= '".$datefilter['to']."'");
        //}
        $command = $query->createCommand();
        $models = $command->queryAll();

        $totalItems=$query->count();

        $this->setHeader(200);

        return json_encode(array('status'=>1,'data'=>$models,'totalItems'=>$totalItems),JSON_PRETTY_PRINT);

    }

    public function actionView($id)
    {

        $model=$this->findModel($id);

        $this->setHeader(200);
        echo json_encode(array('status'=>1,'data'=>array_filter($model->attributes)),JSON_PRETTY_PRINT);

    }
    /* function to find the requested record/model */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {

            $this->setHeader(400);
            echo json_encode(array('status'=>0,'error_code'=>400,'message'=>'Bad request'),JSON_PRETTY_PRINT);
            exit;
        }
    }


    public function actionCreate()
    {

        $params=$_REQUEST;

        $model = new User();
        $model->attributes=$params;


        if ($model->save()) {

            $this->setHeader(200);
            echo json_encode(array('status'=>1,'data'=>array_filter($model->attributes)),JSON_PRETTY_PRINT);

        }
        else
        {
            $this->setHeader(400);
            echo json_encode(array('status'=>0,'error_code'=>400,'errors'=>$model->errors),JSON_PRETTY_PRINT);
        }

    }


    public function actionUpdate($id)
    {
        $params=$_REQUEST;

        $model = $this->findModel($id);

        $model->attributes=$params;

        if ($model->save()) {

            $this->setHeader(200);
            echo json_encode(array('status'=>1,'data'=>array_filter($model->attributes)),JSON_PRETTY_PRINT);

        }
        else
        {
            $this->setHeader(400);
            echo json_encode(array('status'=>0,'error_code'=>400,'errors'=>$model->errors),JSON_PRETTY_PRINT);
        }

    }

    public function actionDelete($id)
    {
        $model=$this->findModel($id);

        if($model->delete())
        {
            $this->setHeader(200);
            echo json_encode(array('status'=>1,'data'=>array_filter($model->attributes)),JSON_PRETTY_PRINT);

        }
        else
        {

            $this->setHeader(400);
            echo json_encode(array('status'=>0,'error_code'=>400,'errors'=>$model->errors),JSON_PRETTY_PRINT);
        }

    }

    public function actionDeleteall()
    {
        $ids=json_decode($_REQUEST['ids']);

        $data=array();

        foreach($ids as $id)
        {
            $model=$this->findModel($id);

            if($model->delete())
                $data[]=array_filter($model->attributes);
            else
            {
                $this->setHeader(400);
                echo json_encode(array('status'=>0,'error_code'=>400,'errors'=>$model->errors),JSON_PRETTY_PRINT);
                return;
            }
        }

        $this->setHeader(200);
        echo json_encode(array('status'=>1,'data'=>$data),JSON_PRETTY_PRINT);

    }


    /* Functions to set header with status code. eg: 200 OK ,400 Bad Request etc..*/
    private function setHeader($status)
    {

        $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->_getStatusCodeMessage($status);
        $content_type="application/json; charset=utf-8";

        header($status_header);
        header('Content-type: ' . $content_type);
        header('X-Powered-By: ' . "Nintriva <nintriva.com>");
    }
    private function _getStatusCodeMessage($status)
    {
        $codes = Array(
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
        );
        return (isset($codes[$status])) ? $codes[$status] : '';
    }
}
