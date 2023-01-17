<?php

namespace app\controllers;

use app\components\SharedDataFilter;
use app\models\LoginForm;
use tebe\inertia\web\Controller;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\web\ServerErrorHttpException;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => [ 'logout'],
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ],
            [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post']
                ]
            ],
            [
                'class' => SharedDataFilter::class
            ]
        ];
    }

    public function actionError()
    {
        $this->layout = 'error';
        if (($exception = Yii::$app->getErrorHandler()->exception) === null) {
            $exception = new NotFoundHttpException(Yii::t('yii', 'Page not found.'));
        }
        Yii::$app->getResponse()->setStatusCodeByException($exception);
        return $this->render('error', [
            'name' => $exception->getName(),
            'message' => $exception->getMessage(),
            'exception' => $exception,
        ]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->inertia('Site/Index');
    }

    public function actionPricing()
    {
        return $this->inertia('Site/Pricing');
    }

    public function actionAbout()
    {
        return $this->inertia('Site/About');
    }

    public function actionTutorials()
    {
        return $this->inertia('Site/Tutorials');
    }
    public function actionSupport()
    {
        return $this->inertia('Site/Support');
    }
    public function actionBlog()
    {
        return $this->inertia('Site/Blog');
    }
    public function actionSignup()
    {
        return $this->inertia('Site/Signup');
    }
    public function actionCourses()
    {
        return $this->inertia('Site/Courses');
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $postData = Yii::$app->request->post();
        $model = new LoginForm();
        if ($model->load($postData, '')) {
            if ($model->login()) {
                return $this->goBack();
            }
            Yii::$app->session->setFlash('errors', $model->getErrors());
        }

        return $this->inertia('Auth/Login');
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function action500()
    {
        sleep(1);
        throw new ServerErrorHttpException('An unexpected error happend.');
    }
}
