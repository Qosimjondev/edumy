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
 * @property int|null $status
 * @property string $course_title
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 */
class Video extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
           [
               'class' => TimestampBehavior::class,
           ],
           [
               'class' => BlameableBehavior::class,
               'updatedByAttribute' => false
           ]
        ];
    }
    const PUBLISHED =1;
    const UN_PUBLISHED=0;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['video_title', 'video_url', 'course_title'], 'required'],
            [['video_description'], 'string'],
            [['status', 'created_at', 'updated_at', 'created_by'], 'integer'],
            [['video_title', 'course_title'], 'string', 'max' => 255],
            [['video_url'], 'string', 'max' => 512],
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
            'status' => 'Status',
            'course_title' => 'Course Title',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\VideoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\VideoQuery(get_called_class());
    }
}
