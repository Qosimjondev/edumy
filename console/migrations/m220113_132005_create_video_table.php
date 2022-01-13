<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%video}}`.
 */
class m220113_132005_create_video_table extends Migration
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
            'status' => $this->integer(1)->defaultValue(0),
            'course_title' => $this->string(255)->notNull(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%video}}');
    }
}
