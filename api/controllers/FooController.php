<?php

namespace api\controllers;

use api\components\rest\ActiveController;

class FooController extends ActiveController
{
    public $modelClass = 'foo\models\Foo';
}