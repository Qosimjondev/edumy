<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%playlist}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m220119_053341_create_playlist_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%playlist}}', [
            'id' => $this->primaryKey(),
            'course_title' => $this->string(255)->notNull(),
            'course_price' => $this->integer(100)->defaultValue(0),
            'course_poster' => $this->string(255)->notNull(),
            'course_categ' => $this->string(255)->notNull(),
            'created_by' => $this->integer(11),
            'created_at' => $this->integer(11),
        ]);

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
