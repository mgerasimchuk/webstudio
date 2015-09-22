<?php

use yii\db\Schema;
use yii\db\Migration;

class m150922_013304_create_project_category_table extends Migration
{
    public function up()
    {
        $this->createTable('project_category', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'createdAt' => Schema::TYPE_DATETIME,
            'updatedAt' => Schema::TYPE_DATETIME,
        ]);
    }

    public function down()
    {
        $this->dropTable('project_category');
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
