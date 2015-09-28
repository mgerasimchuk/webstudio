<?php

use yii\db\Schema;
use yii\db\Migration;

class m150922_013809_create_project_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%project}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'note' => $this->string()->notNull(),
            'picture' => $this->string()->notNull(),
            'createdAt' => $this->dateTime()->notNull(),
            'updatedAt' => $this->dateTime()->notNull(),
            'categoryId' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey('FK_project_categoryId', '{{%project}}', 'categoryId', '{{%project_category}}', 'id');
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
