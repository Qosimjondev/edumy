<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "user_info".
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $password
 * @property string|null $password_repeat
 * @property string|null $user_photo
 * @property int|null $phone_number
 * @property string|null $email
 * @property string|null $position
 * @property int|null $age
 * @property string|null $gender
 * @property string|null $location
 * @property integer|null $user_id
 */
class Info extends \yii\db\ActiveRecord
{
    public $img;
    public $password_repeat;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info';
    }

    public function behaviors()
    {
        return [
            [
                'class'=>BlameableBehavior::class,
                'createdByAttribute'=>'user_id',
                'updatedByAttribute'=>false
            ]
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone_number','user_id'], 'integer'],
            [['password','password_repeat'],'string','max'=>512],
            [['age'],'integer','min'=>2,'max'=>3],
            ['password','compare','compareAttribute'=>'password_repeat'],
            [['username', 'position'], 'string', 'max' => 100],
            [['user_photo', 'email', 'location'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 50],
            [['img'],'file','extensions'=>['jpg','png']]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'user_photo' => 'User Photo',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
            'position' => 'Lavozim',
            'age' => 'Age',
            'gender' => 'Gender',
            'location' => 'Manzil',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\UserInfoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\UserInfoQuery(get_called_class());
    }
}
