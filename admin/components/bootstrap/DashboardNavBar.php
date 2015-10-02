<?php

namespace back\components\bootstrap;

use yii\bootstrap\NavBar;

class DashboardNavBar extends NavBar
{
    public $brandLabel = 'Gome Dashboard';
    public $options = [
        'class' => 'navbar-default navbar-fixed-top',
    ];

    public function init()
    {
        $this->brandLabel = implode( '&nbsp;', [
            '<i class="glyphicon glyphicon-wrench"></i>',
            "<span>{$this->brandLabel}</span>",
        ] );

        parent::init();
    }
}