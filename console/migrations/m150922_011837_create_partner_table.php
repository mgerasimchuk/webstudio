<?php

use yii\db\Schema;
use yii\db\Migration;

class m150922_011837_create_partner_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%partner}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'picture' => $this->string()->notNull(),
            'link' => $this->string()->notNull(),
            'createdAt' => $this->dateTime()->notNull(),
            'updatedAt' => $this->dateTime()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%partner}}');
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
