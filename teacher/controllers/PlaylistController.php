<?php

namespace teacher\controllers;

use common\models\Playlist;
use yii\base\Security;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PlaylistController implements the CRUD actions for Playlist model.
 */
class PlaylistController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Playlist models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Playlist::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Playlist model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

        /**
     * Creates a new Playlist model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Playlist();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->imageFile=UploadedFile::getInstance($model,'imageFile');
                $name=$this->getSecurity(8);
                $extension=$model->imageFile->extension;
                $model->imageFile->saveAs(\Yii::getAlias('@frontend').'/web/uploads/poster/'.$name.'.'.$extension);
                $model->course_poster=$name.'.'.$extension;
                $model->course_price=trim($model->course_price);
                if($model->save(false)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Playlist model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImg=$model->course_poster;
        if ( $model->load($this->request->post())) {
            if($model->course_poster)
            {
                $model->imageFile=UploadedFile::getInstance($model,'imageFile');
                $name=$this->getSecurity(8);
                $extension=$model->imageFile->extension;
                $model->imageFile->saveAs(\Yii::getAlias('@frontend').'/web/uploads/poster/'.$name.'.'.$extension);
                $model->course_poster=$name.'.'.$extension;
                if(unlink(\Yii::getAlias('@frontend').'/web/uploads/poster/'.$oldImg))
                {
                    $model->save(false);
                }
            }else
            {
               $model->save();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Playlist model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    public function actionStart($id)
    {
        $model=$this->findModel($id);

        return $this->render('start',[ 'model' => $model]);
    }
    public function actionInformation($id)
    {
        $model=$this->findModel($id);

        return $this->render('information',[ 'model' =>$model ]);
    }

    /**
     * Finds the Playlist model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Playlist the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Playlist::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    protected function getSecurity($length)
    {
        $sec=new Security();
        $name=$sec->generateRandomString($length);
        return $name;
    }
}
