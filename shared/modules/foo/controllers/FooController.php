<?php

namespace foo\controllers;

use Yii;
use foo\models\Foo;
use foo\models\FooCriteria;
use yii\web\Controller;

class FooController extends Controller
{
    public function actionIndex()
    {
        $searchCriteria = new FooCriteria();
        $dataProvider = $searchCriteria->search( Yii::$app->request->queryParams );

        return $this->render( 'index', [
            'searchCriteria' => $searchCriteria,
            'dataProvider' => $dataProvider,
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
            $session->addFlash( 'success', '@foo created successfully' );

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
            $session->addFlash( 'success', '@foo modified successfully' );

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
            $session->addFlash( 'success', '@foo destroyed successfully' );

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