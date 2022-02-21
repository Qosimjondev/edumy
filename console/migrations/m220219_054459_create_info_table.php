<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%info}}`.
 * {{%user}}
 */
class m220219_054459_create_info_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%info}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255),
            'password' => $this->string(512),
            'user_photo' => $this->string(512),
            'phone_number' => $this->string(512),
            'email' => $this->string(255),
            'age' => $this->integer(3),
            'gender' => $this->string(255),
            'position' => $this->string(255),
            'location' => $this->string(255),
            'user_id' => $this->integer(11),
        ]);
        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-info-user_id}}',
            '{{%info}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-info-user_id}}',
            '{{%info}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            '{{%fk-info-user_id}}',
            '{{%info}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-info-user_id}}',
            '{{%info}}'
        );
        $this->dropTable('{{%info}}');
    }
}



