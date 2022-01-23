<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string $video_title
 * @property string|null $video_description
 * @property string $video_url
 * @property int|null $course_id
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $status
 *
 * @property Course $course
 * @property User $createdBy
 */
class Video extends \yii\db\ActiveRecord
{
    const UN_PUBLISHED=0;
    const PUBLISHED=1;
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
                'class' => BlameableBehavior::class,
                'updatedByAttribute' => false
            ],
            [
                'class' => TimestampBehavior::class,
                'updatedAtAttribute' => false
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['video_title', 'video_url'], 'required'],
            [['video_description'], 'string'],
            [['course_id', 'created_by', 'created_at'], 'integer'],
            [['status'],'integer'],
            [['video_title'], 'string', 'max' => 255],
            [['video_url'], 'string', 'max' => 512],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['course_id' => 'id']],
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
            'video_title' => 'Video Title',
            'video_description' => 'Video Description',
            'video_url' => 'Video Url',
            'course_id' => 'Course ID',
            'created_at' => 'Created At',
            'status'=>'Video status'
        ];
    }

    /**
     * Gets query for [[Course]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\CourseQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::className(), ['id' => 'course_id']);
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
     * {@inheritdoc}
     * @return \common\models\query\VideoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\VideoQuery(get_called_class());
    }
    public function getVideoStatus()
    {
        return [
            self::UN_PUBLISHED,
            self::PUBLISHED,
        ];
    }
}
