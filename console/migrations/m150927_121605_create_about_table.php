<?php

use yii\db\Schema;
use yii\db\Migration;

class m150927_121605_create_about_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%about}}', [
           'id' => $this->primaryKey(),
            'firstTitle' => $this->string()->notNull(),
            'secondTitle' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'picture' => $this->string(),
            'isShow' => $this->boolean()->notNull(),
            'createdAt' => $this->dateTime()->notNull(),
            'updatedAt' => $this->dateTime()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%about}}');
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
