<?php

namespace api\controllers;

use api\components\rest\Controller;

class TodoController extends Controller
{
    public function actionIndex()
    {
        $todo = new \stdClass();
        $todo->title = '@todo';
        $todo->content = 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.';
        
        return [ $todo, $todo ];
    }
}