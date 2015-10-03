<?php

namespace back\components\bootstrap;

use yii\base\Widget;
use yii\bootstrap\NavBar;

class DashboardNavBar extends Widget
{
    public $brandLabel = 'Gome';
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

        echo DashboardPrimaryNav::widget();
        echo DashboardSecondaryNav::widget();

        NavBar::end();
    }
}