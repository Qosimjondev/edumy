<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%group}}`
 * - `{{%user}}`
 */
class m220125_054804_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'c_name' => $this->string(255),
            'g_id' => $this->integer(11),
        ]);

        // creates index for column `g_id`
        $this->createIndex(
            '{{%idx-category-g_id}}',
            '{{%category}}',
            'g_id'
        );

        // add foreign key for table `{{%group}}`
        $this->addForeignKey(
            '{{%fk-category-g_id}}',
            '{{%category}}',
            'g_id',
            '{{%group}}',
            'id',
            'CASCADE'
        );


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%group}}`
        $this->dropForeignKey(
            '{{%fk-category-g_id}}',
            '{{%category}}'
        );

        // drops index for column `g_id`
        $this->dropIndex(
            '{{%idx-category-g_id}}',
            '{{%category}}'
        );

        $this->dropTable('{{%category}}');
    }
}
