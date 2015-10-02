<?php

namespace back\components\bootstrap;

use yii\base\Widget;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

class DashboardTopNavBar extends Widget
{
    public $brandLabel = 'Gome Dashboard';

    public function run()
    {
        $brandLabel = implode( '&nbsp;', [
            '<i class="glyphicon glyphicon-wrench"></i>',
            "<span>{$this->brandLabel}</span>",
        ] );

        NavBar::begin( [
            'brandLabel' => $brandLabel,
            'options' => [
                'class' => 'navbar-default navbar-fixed-top',
            ],
        ] );

        echo Nav::widget( [
            'items' => [
                [ 'label' => '@todo', 'url' => [ '/scaffold/to-do' ] ],
                [ 'label' => '@foo', 'url' => [ '/scaffold/foo' ] ],
            ],
            'options' => [
                'class' => 'navbar-nav navbar-right',
            ],
        ] );

        NavBar::end();
    }
}