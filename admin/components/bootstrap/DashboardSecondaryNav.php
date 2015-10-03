<?php

namespace back\components\bootstrap;

use yii\base\Widget;
use yii\bootstrap\Nav;

class DashboardSecondaryNav extends Widget
{
    public $navOptions = [
        'class' => 'navbar-nav navbar-right',
    ];

    public function run()
    {
        echo Nav::widget( [
            'items' => [
                [ 'label' => '@todo', 'url' => [ '/scaffold/todo/index' ] ],
                [ 'label' => '@foo', 'url' => [ '/scaffold/foo/index' ] ],
            ],
            'options' => $this->navOptions,
        ] );
    }
}