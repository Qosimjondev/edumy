<?php

namespace teacher\controllers;

use common\models\Course;
use Imagine\Image\Box;
use yii\base\Security;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\imagine\Image;

/**
 * CourseController implements the CRUD actions for Course model.
 */
class CourseController extends Controller
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
     * Lists all Course models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Course::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Course model.
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
     * Creates a new Course model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Course();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->imageFile=UploadedFile::getInstance($model,'imageFile');
                $name=$this->getSecurity();
                $imagePath=\Yii::getAlias('@frontend').'/web/uploads/poster/'.$name.'.'.$model->imageFile->extension;
                $model->imageFile->saveAs($imagePath);
                $model->course_poster=$name.'.'.$model->imageFile->extension;
                Image::resize($imagePath,307,200,false,['quality'=>80])->save();
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
     * Updates an existing Course model.
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
            $model->imageFile=UploadedFile::getInstance($model,'imageFile');
            if($model->imageFile)
            {
                $name=$this->getSecurity();
                $extension=$model->imageFile->extension;
                $imagePath=\Yii::getAlias('@frontend').'/web/uploads/poster/'.$name.'.'.$model->imageFile->extension;
                $model->imageFile->saveAs($imagePath);
                Image::resize($imagePath,307,200,false,['quality'=>80])->save();
                $model->course_poster=$name.'.'.$extension;
                if(unlink(\Yii::getAlias('@frontend').'/web/uploads/poster/'.$oldImg))
                {
                    $model->save(false);
                }
            }
            else
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
     * Deletes an existing Course model.
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
     * Finds the Course model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Course the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Course::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    protected  function getSecurity()
    {
        $sec=new Security();
        $name=$sec->generateRandomString(8);
        return $name;
    }
}
