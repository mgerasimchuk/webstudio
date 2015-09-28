<?php

use yii\db\Schema;
use yii\db\Migration;

class m150922_012406_create_team_member_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%team_member}}', [
            'id' => $this->primaryKey(),
            'firstName' => $this->string()->notNull(),
            'lastName' => $this->string()->notNull(),
            'position' => $this->string()->notNull(),
            'picture' => $this->string()->notNull(),
            'socialTwitter' => $this->string()->notNull(),
            'socialFacebook' => $this->string()->notNull(),
            'socialLinkedIn' => $this->string()->notNull(),
            'createdAt' => $this->dateTime()->notNull(),
            'updatedAt' => $this->dateTime()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%team_member}}');
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
