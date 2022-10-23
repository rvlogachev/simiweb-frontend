<?php

namespace common\modules\management\controllers;

use yii\web\Controller;

/**
 * Default controller for the `management` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        $this->setHeader(200);
        echo json_encode(array('status'=>1,'data'=>['action'=>'defaultController']),JSON_PRETTY_PRINT);
    }
}
