<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_info}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m220207_094101_create_user_info_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_info}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255),
            'password' => $this->string(512),
            'user_photo' => $this->string(512),
            'phone_number' => $this->integer(9),
            'email' => $this->string(255),
            'age' => $this->integer(3),
            'gender' => $this->string(255),
            'position' => $this->string(255),
            'location' => $this->string(255),
            'user_id' => $this->integer(11),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-user_info-user_id}}',
            '{{%user_info}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-user_info-user_id}}',
            '{{%user_info}}',
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
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-user_info-user_id}}',
            '{{%user_info}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-user_info-user_id}}',
            '{{%user_info}}'
        );

        $this->dropTable('{{%user_info}}');
    }
}
