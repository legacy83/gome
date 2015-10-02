<?php

namespace front\components\bootstrap;

use yii\base\Widget;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

class SiteTopNavBar extends Widget
{
    public $brandLabel = 'Gome';

    public function run()
    {
        $brandLabel = implode( '&nbsp;', [
            '<i class="glyphicon glyphicon-home"></i>',
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
                [ 'label' => 'About', 'url' => [ '/scaffold/to-do' ] ],
            ],
            'options' => [
                'class' => 'navbar-nav navbar-left',
            ],
        ] );

        echo Nav::widget( [
            'items' => [
                [ 'label' => '@todo', 'url' => [ '/scaffold/to-do' ] ],
            ],
            'options' => [
                'class' => 'navbar-nav navbar-right',
            ],
        ] );

        NavBar::end();
    }
}