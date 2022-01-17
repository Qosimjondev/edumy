<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "playlist".
 *
 * @property int $id
 * @property int|null $course_id
 * @property int|null $couse_price
 * @property int|null $course_author
 * @property string|null $course_poster
 * @property string $course_categ
 *
 * @property Video $course
 * @property User $courseAuthor
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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_id', 'couse_price', 'course_author'], 'integer'],
            [['course_categ'], 'required'],
            [['course_poster', 'course_categ'], 'string', 'max' => 255],
            [['course_author'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['course_author' => 'id']],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Video::className(), 'targetAttribute' => ['course_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_id' => 'Course ID',
            'couse_price' => 'Couse Price',
            'course_author' => 'Course Author',
            'course_poster' => 'Course Poster',
            'course_categ' => 'Course Categ',
        ];
    }

    /**
     * Gets query for [[Course]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\VideoQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Video::className(), ['id' => 'course_id']);
    }

    /**
     * Gets query for [[CourseAuthor]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getCourseAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'course_author']);
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
