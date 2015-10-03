<?php

namespace front\components\bootstrap;

use yii\base\Widget;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

class SiteNavBar extends Widget
{
    public $brandLabel = 'Gome';
    public $brandLabelIcon = '<i class="glyphicon glyphicon-home"></i>';
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
            ],
            'options' => [
                'class' => 'navbar-nav navbar-right',
            ],
        ] );

        NavBar::end();
    }
}