<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%course}}`.
 */
class m220123_180543_add_course_categ_column_to_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%course}}', 'course_categ', $this->string(255)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%course}}', 'course_categ');
    }
}
