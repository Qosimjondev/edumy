<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%course}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%category}}`
 * - `{{%user}}`
 */
class m220226_070112_create_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%course}}', [
            'id' => $this->primaryKey(),
            'course_title' => $this->string(255)->notNull(),
            'course_description' => $this->text()->notNull(),
            'course_poster' => $this->string(255)->notNull(),
            'course_price' => $this->integer(11)->notNull(),
            'course_author' => $this->string(255)->notNull(),
            'course_categ' => $this->integer(11),
            'created_by' => $this->integer(11),
            'created_at' => $this->integer(11),
        ]);

        // creates index for column `course_categ`
        $this->createIndex(
            '{{%idx-course-course_categ}}',
            '{{%course}}',
            'course_categ'
        );

        // add foreign key for table `{{%category}}`
        $this->addForeignKey(
            '{{%fk-course-course_categ}}',
            '{{%course}}',
            'course_categ',
            '{{%category}}',
            'id',
            'CASCADE'
        );

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
        // drops foreign key for table `{{%category}}`
        $this->dropForeignKey(
            '{{%fk-course-course_categ}}',
            '{{%course}}'
        );

        // drops index for column `course_categ`
        $this->dropIndex(
            '{{%idx-course-course_categ}}',
            '{{%course}}'
        );

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
