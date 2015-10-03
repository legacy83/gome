<?php

namespace front\components\bootstrap;

use yii\base\Widget;
use yii\bootstrap\Nav;

class SiteSecondaryNav extends Widget
{
    public $navOptions = [
        'class' => 'navbar-nav navbar-right',
    ];

    public function run()
    {
        echo Nav::widget( [
            'items' => [
                [ 'label' => '@todo', 'url' => [ '/scaffold/todo/index' ] ],
            ],
            'options' => $this->navOptions,
        ] );
    }
}