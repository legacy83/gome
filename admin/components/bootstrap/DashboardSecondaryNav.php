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
                [ 'label' => '@todo', 'url' => [ '/scaffold/to-do/index' ] ],
            ],
            'options' => $this->navOptions,
        ] );
    }
}