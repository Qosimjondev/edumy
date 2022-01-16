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
 * @property string $course_title
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int $created_by
 *
 * @property User $createdBy
 */
class Video extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            [
                'class'=>BlameableBehavior::class,
                'updatedByAttribute' => false,
            ],
            [
                'class'=>TimestampBehavior::class,
            ]
        ];
    }
    const UN_PUBLISHED=0;
    const PUBLISHED=1;
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
            [['video_title', 'video_url', 'course_title', 'created_by'], 'required'],
            [['video_description'], 'string'],
            [['status', 'created_at', 'updated_at', 'created_by'], 'integer'],
            [['video_title', 'course_title'], 'string', 'max' => 255],
            [['video_url'], 'string', 'max' => 512],
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
            'course_title' => 'Course Title',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
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
     * {@inheritdoc}
     * @return \common\models\query\VideoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\VideoQuery(get_called_class());
    }
    public function getStatusLabels()
    {
        return [
            self::UN_PUBLISHED,
            self::PUBLISHED,
        ];
    }
}
