<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%video}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%course}}`
 * - `{{%user}}`
 */
class m220123_164541_create_video_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%video}}', [
            'id' => $this->primaryKey(),
            'video_title' => $this->string(255)->notNull(),
            'video_description' => $this->text(),
            'video_url' => $this->string(512)->notNull(),
            'course_id' => $this->integer(11),
            'created_by' => $this->integer(11),
            'created_at' => $this->integer(11),
        ]);

        // creates index for column `course_id`
        $this->createIndex(
            '{{%idx-video-course_id}}',
            '{{%video}}',
            'course_id'
        );

        // add foreign key for table `{{%course}}`
        $this->addForeignKey(
            '{{%fk-video-course_id}}',
            '{{%video}}',
            'course_id',
            '{{%course}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-video-created_by}}',
            '{{%video}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-video-created_by}}',
            '{{%video}}',
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
        // drops foreign key for table `{{%course}}`
        $this->dropForeignKey(
            '{{%fk-video-course_id}}',
            '{{%video}}'
        );

        // drops index for column `course_id`
        $this->dropIndex(
            '{{%idx-video-course_id}}',
            '{{%video}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-video-created_by}}',
            '{{%video}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-video-created_by}}',
            '{{%video}}'
        );

        $this->dropTable('{{%video}}');
    }
}
