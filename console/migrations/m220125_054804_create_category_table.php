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
            'created_by' => $this->integer(11),
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

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-category-created_by}}',
            '{{%category}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-category-created_by}}',
            '{{%category}}',
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

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-category-created_by}}',
            '{{%category}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-category-created_by}}',
            '{{%category}}'
        );

        $this->dropTable('{{%category}}');
    }
}
