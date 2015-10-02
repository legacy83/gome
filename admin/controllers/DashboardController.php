<?php

namespace back\controllers;

use Yii;
use yii\web\Controller;

class DashboardController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render( 'index' );
    }
}
