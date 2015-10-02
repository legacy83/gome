<?php

namespace back\components\bootstrap;

use yii\bootstrap\Nav;

class DashboardNav extends Nav
{
    public $options = [
        'class' => 'navbar-nav navbar-right',
    ];

    public function init()
    {
        $this->items = [
            [ 'label' => '@todo', 'url' => [ '/scaffold/to-do' ] ],
            [ 'label' => '@foo', 'url' => [ '/scaffold/foo' ] ],
        ];

        parent::init();
    }
}