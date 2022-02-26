<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%course}}`.
 */
class m220226_071806_add_status_column_to_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%course}}', 'status', $this->integer(2)->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%course}}', 'status');
    }
}
