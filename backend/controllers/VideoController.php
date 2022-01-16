<?php

namespace backend\controllers;

use Yii;
use common\models\LoginForm;
use common\models\Video;
use yii\base\Security;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * VideoController implements the CRUD actions for Video model.
 */
class VideoController extends Controller
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
     * Lists all Video models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Video::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Video model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Video model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Video();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->file=UploadedFile::getInstance($model,'file');
                $sec=new Security();
                $name=$sec->generateRandomString(10);
                $ext=$model->file->extension;
                $model->title=$name.'.'.$ext;
                $model->description='';
                $model->video_name=$name.'.'.$ext;
                $model->file->saveAs(\Yii::getAlias('@frontend').'/web/uploads/video/'.$name.'.'.$ext);
                $model->file=null;
                if($model->save(false)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
                else
                {
                    return $model->getErrors();
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
     * Updates an existing Video model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImg=$model->poster;
        if ($model->load($this->request->post())) {
            $model->img=UploadedFile::getInstance($model,'img');
            if($_POST['img']) {
                $name = $model->img->baseName;
                $ext = $model->img->extension;
                $model->poster = $name . '.' . $ext;
                $model->img = null;
                $model->img->saveAs(\Yii::getAlias('@frontend') . '/web/uploads/poster/' . $name . '.' . $ext, false);
            }
            else
            {
                $model->poster=$oldImg;
            }
            if($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
            else
            {
                return $model->getErrors();
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Video model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Video model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Video the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Video::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


}
