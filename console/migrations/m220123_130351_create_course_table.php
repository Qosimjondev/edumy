<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%course}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m220123_130351_create_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%course}}', [
            'id' => $this->primaryKey(),
            'course_title' => $this->string(255)->notNull(),
            'course_price' => $this->integer(11)->defaultValue(0),
            'course_description' => $this->text(),
            'course_poster' => $this->string(255)->notNull(),
            'course_author' => $this->string(255)->notNull(),
            'created_by' => $this->integer(11),
            'created_at' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-course-created_by}}',
            '{{%course}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-course-created_by}}',
            '{{%course}}',
            'created_by',
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
            '{{%fk-course-created_by}}',
            '{{%course}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-course-created_by}}',
            '{{%course}}'
        );

        $this->dropTable('{{%course}}');
    }
}
