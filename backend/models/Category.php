<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string|null $c_name
 * @property int|null $g_id
 *
 * @property Group $g
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['g_id'], 'integer'],
            [['c_name'], 'string', 'max' => 255],
            [['g_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::className(), 'targetAttribute' => ['g_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'c_name' => 'C Name',
            'g_id' => 'G ID',
        ];
    }

    /**
     * Gets query for [[G]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getG()
    {
        return $this->hasOne(Group::className(), ['id' => 'g_id']);
    }
}
