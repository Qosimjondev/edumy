<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%person}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m211226_183030_create_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%person}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'joined_at' => $this->integer(11),
            'status' => $this->integer(1)->defaultValue(0),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-person-user_id}}',
            '{{%person}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-person-user_id}}',
            '{{%person}}',
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
            '{{%fk-person-user_id}}',
            '{{%person}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-person-user_id}}',
            '{{%person}}'
        );

        $this->dropTable('{{%person}}');
    }
}
