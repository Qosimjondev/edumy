<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "playlist".
 *
 * @property int $id
 * @property string $course_title
 * @property int|null $course_price
 * @property string $course_poster
 * @property string $course_categ
 * @property int|null $created_by
 * @property int|null $created_at
 *
 * @property User $createdBy
 */
class Playlist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'playlist';
    }
    public function behaviors()
    {
        return [
            [
                'class' => BlameableBehavior::class,
                'updatedByAttribute' => false
            ],
            [
                'class'=>TimestampBehavior::class,
                'updatedAtAttribute' => false
            ]
        ];
    }
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_title', 'course_poster', 'course_categ','course_description'], 'required'],
            [['course_price', 'created_by', 'created_at'], 'integer'],
            [['course_description'],'string'],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['course_title', 'course_poster', 'course_categ'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_title' => 'Course Title',
            'course_price' => 'Course Price',
            'course_description'=>'Description',
            'course_poster' => 'Course Poster',
            'course_categ' => 'Course Categ',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
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
    public function getCourseTitle()
    {
        return $this->hasMany(Video::className(),['course_title'=>'id']);
    }
    /**
     * {@inheritdoc}
     * @return \common\models\query\PlaylistQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PlaylistQuery(get_called_class());
    }
}
