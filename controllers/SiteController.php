<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }


    public function action1()
    {
        return $this->render('q1');
    }

    public function action2()
    {
        $model = new \app\models\Q2();
        return $this->render('q2', ['model'=>$model]);
    }

    public function action3()
    {
        $model = new \app\models\Q3();
        return $this->render('q3', ['model'=>$model]);
    }

    public function action4()
    {
        $model = new \app\models\Q4();
        $model->load(Yii::$app->request->post());
        
        if(empty($model->k))
        {
            // test 1
            $model->k  = 1;
            $model->b  = 3;
            $model->x1 = 3;
            $model->y1 = 10;
            $model->x2 = 6;
            $model->y2 = 5;
        }
        return $this->render('q4', ['model'=>$model]);
    }

    public function action5()
    {
        $model = new \app\models\Q5Cust;
        return $this->render('q5', ['model'=>$model]);
    }

    public function action6()
    {
        return $this->render('q6');
    }

    public function action7()
    {
        return $this->render('q7');
    }
}
