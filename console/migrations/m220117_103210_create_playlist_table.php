<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%playlist}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%video}}`
 * - `{{%user}}`
 */
class m220117_103210_create_playlist_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%playlist}}', [
            'id' => $this->primaryKey(),
            'course_id' => $this->integer(11),
            'couse_price' => $this->integer(100)->defaultValue(0),
            'course_author' => $this->integer(11),
            'course_poster' => $this->string(255),
            'course_categ' => $this->string(255)->notNull(),
        ]);

        // creates index for column `course_id`
        $this->createIndex(
            '{{%idx-playlist-course_id}}',
            '{{%playlist}}',
            'course_id'
        );

        // add foreign key for table `{{%video}}`
        $this->addForeignKey(
            '{{%fk-playlist-course_id}}',
            '{{%playlist}}',
            'course_id',
            '{{%video}}',
            'id',
            'CASCADE'
        );

        // creates index for column `course_author`
        $this->createIndex(
            '{{%idx-playlist-course_author}}',
            '{{%playlist}}',
            'course_author'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-playlist-course_author}}',
            '{{%playlist}}',
            'course_author',
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
            '{{%fk-playlist-course_id}}',
            '{{%playlist}}'
        );

        // drops index for column `course_id`
        $this->dropIndex(
            '{{%idx-playlist-course_id}}',
            '{{%playlist}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-playlist-course_author}}',
            '{{%playlist}}'
        );

        // drops index for column `course_author`
        $this->dropIndex(
            '{{%idx-playlist-course_author}}',
            '{{%playlist}}'
        );

        $this->dropTable('{{%playlist}}');
    }
}
