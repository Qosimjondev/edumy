<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%video}}`.
 */
class m220123_172429_add_status_column_to_video_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%video}}', 'status', $this->integer(1)->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%video}}', 'status');
    }
}
