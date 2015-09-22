<?php

use yii\db\Schema;
use yii\db\Migration;

class m150922_011004_create_service_table extends Migration
{
    public function up()
    {
        $this->createTable('service', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_STRING,
            'picture' => Schema::TYPE_STRING,
            'createdAt' => Schema::TYPE_DATETIME,
            'updatedAt' => Schema::TYPE_DATETIME,
        ]);

    }

    public function down()
    {
        $this->dropTable('service');
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
