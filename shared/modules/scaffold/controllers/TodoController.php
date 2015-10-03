<?php

namespace scaffold\controllers;

use yii\web\Controller;

class TodoController extends Controller
{
    public function actionIndex()
    {
        return $this->render( 'index' );
    }
}
