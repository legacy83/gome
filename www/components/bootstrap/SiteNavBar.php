<?php

namespace front\components\bootstrap;

use yii\base\Widget;
use yii\bootstrap\NavBar;

class SiteNavBar extends Widget
{
    public $brandLabel = 'Gome';
    public $brandLabelIcon = '<i class="glyphicon glyphicon-home"></i>';
    public $brandLabelFormat = '%s&nbsp;<span>%s</span>';
    public $navBarOptions = [
        'class' => 'navbar-default',
    ];

    public function run()
    {
        NavBar::begin( [
            'brandLabel' => sprintf( $this->brandLabelFormat, $this->brandLabelIcon, $this->brandLabel ),
            'innerContainerOptions' => [ 'class' => 'container-fluid' ],
            'options' => $this->navBarOptions,
        ] );

        echo SitePrimaryNav::widget();
        echo SiteSecondaryNav::widget();

        NavBar::end();
    }
}