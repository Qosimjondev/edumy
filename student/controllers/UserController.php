<?php

namespace student\controllers;

use common\models\User;
use Yii;
use common\models\UserInfo;
use yii\base\Security;
use yii\bootstrap4\Alert;
use yii\data\ActiveDataProvider;
use yii\imagine\Image;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * UserController implements the CRUD actions for UserInfo model.
 */
class UserController extends Controller
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
     * Lists all UserInfo models.
     *
     * @return string
     */
    public function actionSetting()
    {
        $model=$this->findModel(Yii::$app->user->id);
        return $this->render('setting',['model'=>$model]);
    }


    /**
     * Displays a single UserInfo model.
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
     * Creates a new UserInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UserInfo();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UserInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $this->saveImg($id);
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionNumber($id)
    {
        $model=$this->findModel($id);
        if ($model->load($this->request->post())) {
            if($model->save(false)) {
                return $this->redirect(['setting', 'id' => $model->id]);
            }
        }
        return $this->render('number',['model'=>$model]);
    }

    public function actionChangePassword($id)
    {
        $Oldmodel=$this->findModel($id);
        $user=User::findOne(['id'=>$Oldmodel->user_id]);
        $model=new UserInfo();
        if($model->load(\Yii::$app->request->post()) && $model->validate())
        {
            $sec=new Security();
            $user->password=$sec->generatePasswordHash($model->password);
            if($user->save()) {
                 echo Alert::widget([
                    'options' => [
                        'class' => 'alert-info',
                    ],
                    'body' => 'parol almashtirildi.',
                ]);
            }
                return $this->redirect('setting');
            }
        return $this->render('password',['model'=>$model]);
    }
    /**
     * Deletes an existing UserInfo model.
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

    /**
     * Finds the UserInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return UserInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserInfo::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The user does not exsist');
    }
    protected function getSecurity()
    {
        $sec=new Security();
        return $name=$sec->generateRandomString(8);
    }
    protected function saveImg($id)
    {
        $model = $this->findModel($id);
        $oldImg=$model->user_photo;
        if ( $model->load($this->request->post())) {
            $model->img=UploadedFile::getInstance($model,'img');
            if($model->img)
            {
                $name=$this->getSecurity();
                $extension=$model->img->extension;
                $imagePath=\Yii::getAlias('@frontend').'/web/uploads/user/'.$name.'.'.$model->img->extension;
                $model->img->saveAs($imagePath);
                Image::resize($imagePath,50,50,false,['quality'=>80])->save();
                $model->user_photo=$name.'.'.$extension;
                if(!empty($oldImg))
                {
                    unlink(\Yii::getAlias('@frontend').'/web/uploads/user/'.$oldImg);
                }
                $model->save(false);
            }
            return $this->redirect(['setting']);
        }
    }
}
