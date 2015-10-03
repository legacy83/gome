<?php

namespace back\components\bootstrap;

use yii\base\Widget;
use yii\bootstrap\Nav;

class DashboardPrimaryNav extends Widget
{
    public $navOptions = [
        'class' => 'navbar-nav navbar-left',
    ];

    public function run()
    {
        echo Nav::widget( [
            'items' => [
                [ 'label' => 'Dashboard', 'url' => [ '/dashboard/index' ] ],
            ],
            'options' => $this->navOptions,
        ] );
    }
}