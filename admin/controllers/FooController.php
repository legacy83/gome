<?php

namespace back\controllers;

use common\models\Foo;
use yii\web\Controller;

class FooController extends Controller
{
    public function actionIndex()
    {
        return $this->render( 'index', [
            'models' => Foo::find()->all(),
        ] );
    }

    public function actionShow()
    {
        $request = \Yii::$app->request;

        return $this->render( 'show', [
            'model' => Foo::findOne( $request->get( 'id' ) ),
        ] );
    }

    public function actionCreate()
    {
        $request = \Yii::$app->request;
        $session = \Yii::$app->session;

        if ( $request->post( 'createSubmitCreate' ) ) {
            $session->setFlash( 'success', '@foo created successfully' );

            return $this->redirect( [ '/foo' ] );
        }

        if ( $request->post( 'createSubmitCancel' ) ) {
            return $this->redirect( [ '/foo' ] );
        }

        return $this->render( 'create' );
    }

    public function actionEdit()
    {
        $request = \Yii::$app->request;
        $session = \Yii::$app->session;

        if ( $request->post( 'editSubmitSave' ) ) {
            $session->setFlash( 'success', '@foo modified successfully' );

            return $this->redirect( [ '/foo' ] );
        }

        if ( $request->post( 'editSubmitCancel' ) ) {
            return $this->redirect( [ '/foo' ] );
        }

        return $this->render( 'edit', [
            'model' => Foo::findOne( $request->get( 'id' ) ),
        ] );
    }

    public function actionDestroy()
    {
        $request = \Yii::$app->request;
        $session = \Yii::$app->session;

        if ( $request->post( 'destroySubmitYes' ) ) {
            $session->setFlash( 'success', '@foo destroyed successfully' );

            return $this->redirect( [ '/foo' ] );
        }

        if ( $request->post( 'destroySubmitNo' ) ) {
            return $this->redirect( [ '/foo' ] );
        }

        return $this->render( 'destroy', [
            'model' => Foo::findOne( $request->get( 'id' ) ),
        ] );
    }
}
