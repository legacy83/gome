<?php

namespace back\components\bootstrap;

use yii\base\Widget;

class DashboardTopNavBar extends Widget
{
    public function init()
    {
        parent::init();
        DashboardNavBar::begin();
    }

    public function run()
    {
        echo DashboardNav::widget();
        DashboardNavBar::end();
        parent::run();
    }
}