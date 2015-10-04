<?php

namespace foo;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'foo\controllers';
    public $defaultRoute = 'foo/index';

    public function init()
    {
        parent::init();
    }
}