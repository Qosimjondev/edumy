<?php

use yii\db\Migration;

/**
 * Class m211229_185012_add_satatus_to_video
 */
class m211229_185012_add_satatus_to_video extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $this->addColumn('{{%video}}','status',$this->integer(11));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%video}}','status');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211229_185012_add_satatus_to_video cannot be reverted.\n";

        return false;
    }
    */
}
