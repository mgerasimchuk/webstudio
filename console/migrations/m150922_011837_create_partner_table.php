<?php

use yii\db\Schema;
use yii\db\Migration;

class m150922_011837_create_partner_table extends Migration
{
    public function up()
    {
        $this->createTable('partner', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'picture' => Schema::TYPE_STRING,
            'link' => Schema::TYPE_STRING,
            'createdAt' => Schema::TYPE_DATETIME,
            'updatedAt' => Schema::TYPE_DATETIME,
        ]);
    }

    public function down()
    {
        $this->dropTable('partner');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
