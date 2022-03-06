<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "course".
 *
 * @property int $id
 * @property string $course_title
 * @property string $course_description
 * @property string $course_poster
 * @property int $course_price
 * @property string $course_author
 * @property int|null $course_categ
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $status
 *
 * @property Category $courseCateg
 * @property User $createdBy
 * @property Video[] $videos
 */
class Course extends \yii\db\ActiveRecord
{
    public $imageFile;
    const ACTIVE=1;
    const IN_ACTIVE=0;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'updatedAtAttribute' =>false,
            ],
            [
                'class' => BlameableBehavior::class,
                'updatedByAttribute' =>false,
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_title', 'course_description', 'course_poster', 'course_price', 'course_author','imageFile'], 'required'],
            [['course_description'], 'string'],
            [['imageFile'],'file','extensions'=>'jpg,png'],
            [['course_price', 'course_categ', 'created_by', 'created_at', 'status'], 'integer'],
            [['course_title', 'course_poster', 'course_author'], 'string', 'max' => 255],
            [['course_categ'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['course_categ' => 'id']],
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
            'course_description' => 'Course Description',
            'course_poster' => 'Course Poster',
            'course_price' => 'Course Price',
            'course_author' => 'Course Author',
            'course_categ' => 'Course Categ',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[CourseCateg]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\CategoryQuery
     */
    public function getCourseCateg()
    {
        return $this->hasOne(Category::className(), ['id' => 'course_categ']);
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

    public function getStatusLabels()
    {
        return [
            self::IN_ACTIVE,
            self::ACTIVE,
        ];
    }
}
