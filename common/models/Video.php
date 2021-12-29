<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string $title
 * @property string $video_name
 * @property string $description
 * @property string|null $poster
 * @property int|null $created_by
 * @property int|null $user_id
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $status
 *
 * @property User $createdBy
 * @property User $user
 */
class Video extends \yii\db\ActiveRecord
{
    public $file;
    public $img;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video';
    }
    public function behaviors()
    {
        return [
            [
                'class'=>TimestampBehavior::class,
            ],
            [
                'class'=>BlameableBehavior::class,
                'updatedByAttribute'=>false,
            ]
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'video_name', 'description'], 'required'],
            [['description'], 'string'],
            [['created_by', 'user_id', 'created_at', 'updated_at', 'status'], 'integer'],
            [['title', 'poster'], 'string', 'max' => 255],
            [['file'],'file','skipOnEmpty'=>false,'extensions'=>['mp4','3gp','webm','mov']],
            [['img'],'file','extensions'=>'jpg,png'],
            [['video_name'], 'string', 'max' => 32],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'video_name' => 'Video Name',
            'description' => 'Description',
            'poster' => 'Poster',
            'created_by' => 'Created By',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\VideoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\VideoQuery(get_called_class());
    }
    public function getVideoPoster()
    {
        if($this->poster !== null){
            $poster=$this->poster;
        }
        else
        {
            $poster='';
        }
        return '/frontend/web/uploads/poster/'.$poster;
    }
    public function getVideoLink()
    {
        if($this->video_name !== null){
            $link=$this->video_name;
        }
        else
        {
            $link='';
        }
        return '/frontend/web/uploads/video/'.$link;
    }
}
