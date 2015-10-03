<?php

namespace front\components\bootstrap;

use yii\base\Widget;
use yii\bootstrap\Nav;

class SitePrimaryNav extends Widget
{
    public $navOptions = [
        'class' => 'navbar-nav navbar-left',
    ];

    public function run()
    {
        echo Nav::widget( [
            'items' => [
                [ 'label' => 'Home', 'url' => [ '/site/index' ] ],
            ],
            'options' => $this->navOptions,
        ] );
    }
}