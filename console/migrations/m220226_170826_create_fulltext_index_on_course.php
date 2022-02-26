<?php

use yii\db\Migration;

/**
 * Class m220226_170826_create_fulltext_index_on_course
 */
class m220226_170826_create_fulltext_index_on_course extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE {{%course}} ADD FULLTEXT(course_title,course_author,course_description)");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220226_170826_create_fulltext_index_on_course cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220226_170826_create_fulltext_index_on_course cannot be reverted.\n";

        return false;
    }
    */
}
