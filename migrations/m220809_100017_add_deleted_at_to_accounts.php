<?php

use yii\db\Migration;

/**
 * Class m220716_170433_add_deleted_at_to_accounts
 */
class m220809_100017_add_deleted_at_to_accounts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('accounts','deleted_at', $this->dateTime()->null() );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropColumn('accounts','deleted_at');
    }

}
