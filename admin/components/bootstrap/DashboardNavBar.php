<?php

namespace back\components\bootstrap;

use yii\base\Widget;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

class DashboardNavBar extends Widget
{
    public $brandLabel = 'Gome Dashboard';
    public $brandLabelIcon = '<i class="glyphicon glyphicon-wrench"></i>';
    public $brandLabelFormat = '%s&nbsp;<span>%s</span>';
    public $navBarOptions = [
        'class' => 'navbar-default navbar-fixed-top',
    ];

    public function run()
    {
        NavBar::begin( [
            'brandLabel' => sprintf( $this->brandLabelFormat, $this->brandLabelIcon, $this->brandLabel ),
            'options' => $this->navBarOptions,
        ] );

        echo Nav::widget( [
            'items' => [
                [ 'label' => '@todo', 'url' => [ '/scaffold/to-do/index' ] ],
                [ 'label' => '@foo', 'url' => [ '/scaffold/foo/index' ] ],
            ],
            'options' => [
                'class' => 'navbar-nav navbar-right',
            ],
        ] );

        NavBar::end();
    }
}