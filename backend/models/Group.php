<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "group".
 *
 * @property int $id
 * @property string $g_name
 * @property string $poster
 * @property string $posterImg
 *
 * @property Category[] $categories
 */
class Group extends \yii\db\ActiveRecord
{
    public $posterImg;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['g_name', 'poster'], 'required'],
            [['posterImg'],'file','extensions'=>'jpg,pnj'],
            [['g_name', 'poster'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'g_name' => 'Kurs Kategoriyasi',
            'poster' => 'Kurs Poster',
        ];
    }

    /**
     * Gets query for [[Categories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['g_id' => 'id']);
    }
}
