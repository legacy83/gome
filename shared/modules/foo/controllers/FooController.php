<?php

namespace foo\controllers;

use Yii;
use foo\models\Foo;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * FooController implements the CRUD actions for Foo model.
 */
class FooController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => [ 'post' ],
                ],
            ],
        ];
    }

    /**
     * Lists all Foo models.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $query = Foo::find();
        $dataProvider = new ActiveDataProvider( [
            'query' => $query,
        ] );

        return $this->render( 'index', [
            'dataProvider' => $dataProvider,
        ] );
    }

    /**
     * Displays a single Foo model.
     *
     * @param integer $id
     *
     * @return mixed
     */
    public function actionView( $id )
    {
        return $this->render( 'view', [
            'model' => $this->findModel( $id ),
        ] );
    }

    /**
     * Creates a new Foo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     *
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Foo();
        if ( $model->load( Yii::$app->request->post() ) && $model->save() ) {
            Yii::$app->session->addFlash( 'success', '@foo created successfully' );
            return $this->redirect( [ 'view', 'id' => $model->id ] );
        } else {
            return $this->render( 'create', [
                'model' => $model,
            ] );
        }
    }

    /**
     * Updates an existing Foo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param integer $id
     *
     * @return mixed
     */
    public function actionUpdate( $id )
    {
        $model = $this->findModel( $id );
        if ( $model->load( Yii::$app->request->post() ) && $model->save() ) {
            Yii::$app->session->addFlash( 'success', '@foo modified successfully' );
            return $this->redirect( [ 'view', 'id' => $model->id ] );
        } else {
            return $this->render( 'update', [
                'model' => $model,
            ] );
        }
    }

    /**
     * Deletes an existing Foo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     *
     * @param integer $id
     *
     * @return mixed
     */
    public function actionDelete( $id )
    {
        $this->findModel( $id )->delete();
        Yii::$app->session->addFlash( 'success', '@foo destroyed successfully' );
        return $this->redirect( [ 'index' ] );
    }

    /**
     * Finds the Foo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param integer $id
     *
     * @return Foo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    private function findModel( $id )
    {
        if ( ( $model = Foo::findOne( $id ) ) !== NULL ) {
            return $model;
        } else {
            throw new NotFoundHttpException( 'The requested page does not exist.' );
        }
    }
}