<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $id
 * @property string $course_title
 * @property int|null $course_price
 * @property string|null $course_description
 * @property string $course_poster
 * @property string $course_author
 * @property int|null $created_by
 * @property int|null $created_at
 * @property string $course_categ
 *
 * @property User $createdBy
 * @property Video[] $videos
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_title', 'course_poster', 'course_author','course_categ'], 'required'],
            [['course_price', 'created_by', 'created_at'], 'integer'],
            [['course_description'], 'string'],
            [['imageFile'],'file','extensions' => ['jpg','png']],
            [['course_title', 'course_poster', 'course_author','course_categ'], 'string', 'max' => 255],
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
            'course_author' => 'Course Author',
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

    /**
     * Gets query for [[Videos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\VideoQuery
     */
    public function getVideos()
    {
        return $this->hasMany(Video::className(), ['course_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CourseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CourseQuery(get_called_class());
    }
}
