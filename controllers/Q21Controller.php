<?php

namespace app\controllers;

use yii\filters\AccessControl;
use yii\web\UnauthorizedHttpException;

class Q21Controller extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['get-user-name', 'get-user-role', 'get-user-payments'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    throw new UnauthorizedHttpException('Только для авторизованных пользователей');
                }
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGetUserName()
    {
        return $this->renderContent('<h3>actionGetUserName</h3><a href="'.\yii\helpers\Url::to(['index']).'">Назад</a>');
    }

    public function actionGetUserRole()
    {
        return $this->renderContent('<h3>actionGetUserRole</h3><a href="'.\yii\helpers\Url::to(['index']).'">Назад</a>');
    }

    public function actionGetUserPayments()
    {
        return $this->renderContent('<h3>actionGetUserPayments</h3><a href="'.\yii\helpers\Url::to(['index']).'">Назад</a>');
    }

}
