<?php

namespace todo;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'todo\controllers';
    public $defaultRoute = 'todo/index';

    public function init()
    {
        parent::init();
    }
}