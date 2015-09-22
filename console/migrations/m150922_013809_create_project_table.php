<?php

use yii\db\Schema;
use yii\db\Migration;

class m150922_013809_create_project_table extends Migration
{
    public function up()
    {
        $this->createTable('project', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_STRING,
            'note' => Schema::TYPE_STRING,
            'picture' => Schema::TYPE_STRING,
            'createdAt' => Schema::TYPE_DATETIME,
            'updatedAt' => Schema::TYPE_DATETIME,
            'categoryId' =>Schema::TYPE_INTEGER,
        ]);

        $this->addForeignKey('FK_project_categoryId', 'project', 'categoryId', 'project_category', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('FK_project_categoryId', 'project');
        $this->dropTable('project');
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
