<?php

namespace back\components\bootstrap;

use Yii;
use yii\base\Widget;
use yii\widgets\Breadcrumbs;

class DashboardBreadcrumbs extends Widget
{
    public function run()
    {
        $params = $this->view->params;
        echo Breadcrumbs::widget( [
            'homeLink' => [ 'label' => 'Dashboard', 'url' => [ '/dashboard/index' ] ],
            'links' => isset( $params[ 'breadcrumbs' ] ) ? $params[ 'breadcrumbs' ] : [ ],
        ] );
    }
}