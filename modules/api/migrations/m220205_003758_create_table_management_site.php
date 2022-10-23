<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m220205_003758_create_table_management_site
 */
class m220205_003758_create_table_management_site extends Migration
{
    /**
     * {@inheritdoc}
     *
     *
     *
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB ';

        $this->createTable(
            '{{%management_site}}',
            [
                'id' => Schema::TYPE_PK,
                'created_by'=>Schema::TYPE_INTEGER .' NULL DEFAULT NULL',
                'updated_by'=>Schema::TYPE_INTEGER .' NULL DEFAULT NULL',
                'active' => Schema::TYPE_CHAR . '(1) NOT NULL DEFAULT \'Y\'',
                'def' => Schema::TYPE_CHAR . '(1) NOT NULL DEFAULT \'N\'',
                'priority' => Schema::TYPE_INTEGER . '(11) NOT NULL DEFAULT \'500\'',
                'code' => Schema::TYPE_CHAR . '(15) NOT NULL',
                'name' => Schema::TYPE_STRING . ' NOT NULL',
                'server_name' => Schema::TYPE_STRING . ' NULL DEFAULT NULL',
                'description' => Schema::TYPE_STRING . '  NULL DEFAULT NULL',
                'image_id' => Schema::TYPE_INTEGER . '(11)  NULL DEFAULT NULL',
                'is_default' => Schema::TYPE_INTEGER . '(11) NOT NULL DEFAULT \'0\'',
                'status' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 1',
                'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
                'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL'
            ],
            'COMMENT=\'Сайты\' '.$tableOptions
        );

        // Indexes
        $this->createIndex('code', '{{%management_site}}', 'code',true);
        $this->createIndex('created_by', '{{%management_site}}', 'created_by');
        $this->createIndex('updated_by', '{{%management_site}}', 'updated_by');
        $this->createIndex('created_at', '{{%management_site}}', 'created_at');
        $this->createIndex('updated_at', '{{%management_site}}', 'updated_at');
        $this->createIndex('active', '{{%management_site}}', 'active');
        $this->createIndex('server_name', '{{%management_site}}', 'server_name');
        $this->createIndex('def', '{{%management_site}}', 'def');
        $this->createIndex('priority', '{{%management_site}}', 'priority');
        $this->createIndex('management_site__image_id', '{{%management_site}}', 'image_id');



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%management_site}}');
    }


}
