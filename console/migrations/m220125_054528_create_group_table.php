<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%group}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m220125_054528_create_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%group}}', [
            'id' => $this->primaryKey(),
            'g_name' => $this->string(255)->notNull(),
            'created_by' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-group-created_by}}',
            '{{%group}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-group-created_by}}',
            '{{%group}}',
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
            '{{%fk-group-created_by}}',
            '{{%group}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-group-created_by}}',
            '{{%group}}'
        );

        $this->dropTable('{{%group}}');
    }
}
