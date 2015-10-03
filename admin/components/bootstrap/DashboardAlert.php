<?php

namespace back\components\bootstrap;

use Yii;
use yii\base\Widget;
use yii\bootstrap\Alert;

class DashboardAlert extends Widget
{
    public function run()
    {
        if ( Yii::$app->session->hasFlash( 'success' ) ) {

            Alert::begin( [
                'options' => [
                    'class' => 'alert-success',
                ],
            ] );

            echo '<ul>';

            $alerts = Yii::$app->session->getFlash( 'success' );
            $alerts = is_array( $alerts ) ? $alerts : [ $alerts ];
            foreach ( $alerts as $alert ) {
                echo "<li>$alert</li>";
            }

            echo '</ul>';

            Alert::end();
        }
    }
}