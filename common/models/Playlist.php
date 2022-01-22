<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "playlist".
 *
 * @property int $id
 * @property int|null $course_title
 * @property int $course_price
 * @property string|null $course_description
 * @property string $course_poster
 * @property string $course_categ
 * @property int|null $created_by
 * @property int|null $created_at
 *
 * @property Video $courseTitle
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
                'class'=>BlameableBehavior::class,
                'updatedByAttribute' => false,
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
            [['course_title', 'course_price', 'created_by', 'created_at'], 'integer'],
            [['course_price', 'course_poster', 'course_categ','course_author'], 'required'],
            [['course_description'], 'string'],
            [['imageFile'],'file','skipOnEmpty' => false,'extensions' => ['jpg','pnj']],
            [['course_poster', 'course_categ','course_author'], 'string', 'max' => 255],
            [['course_title'], 'exist', 'skipOnError' => true, 'targetClass' => Video::className(), 'targetAttribute' => ['course_title' => 'id']],
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
            'course_description' => 'Course Description',
            'course_poster' => 'Course Poster',
            'course_categ' => 'Course Categ',
            'course_author'=>'Course_Muallifi',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[CourseTitle]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\VideoQuery
     */
    public function getCourseTitle()
    {
        return $this->hasOne(Video::className(), ['id' => 'course_title']);
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
    public function getCourseName($id)
    {
        $model=Video::findOne($id);
        return $model->course_title;
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
