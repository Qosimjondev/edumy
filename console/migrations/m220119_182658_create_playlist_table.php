<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%playlist}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%video}}`
 * - `{{%user}}`
 */
class m220119_182658_create_playlist_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%playlist}}', [
            'id' => $this->primaryKey(),
            'course_title' => $this->integer(11),
            'course_price' => $this->integer(100)->notNull(),
            'course_author' => $this->string(255)->notNull(),
            'course_description' => $this->text(),
            'course_poster' => $this->string(255)->notNull(),
            'course_categ' => $this->string(255)->notNull(),
            'created_by' => $this->integer(11),
            'created_at' => $this->integer(11),
        ]);

        // creates index for column `course_title`
        $this->createIndex(
            '{{%idx-playlist-course_title}}',
            '{{%playlist}}',
            'course_title'
        );

        // add foreign key for table `{{%video}}`
        $this->addForeignKey(
            '{{%fk-playlist-course_title}}',
            '{{%playlist}}',
            'course_title',
            '{{%video}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-playlist-created_by}}',
            '{{%playlist}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-playlist-created_by}}',
            '{{%playlist}}',
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
        // drops foreign key for table `{{%video}}`
        $this->dropForeignKey(
            '{{%fk-playlist-course_title}}',
            '{{%playlist}}'
        );

        // drops index for column `course_title`
        $this->dropIndex(
            '{{%idx-playlist-course_title}}',
            '{{%playlist}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-playlist-created_by}}',
            '{{%playlist}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-playlist-created_by}}',
            '{{%playlist}}'
        );

        $this->dropTable('{{%playlist}}');
    }
}
