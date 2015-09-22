<?php

use yii\db\Schema;
use yii\db\Migration;

class m150922_012406_create_team_member_table extends Migration
{
    public function up()
    {
        $this->createTable('team_member', [
            'id' => Schema::TYPE_PK,
            'firstName' => Schema::TYPE_STRING,
            'lastName' => Schema::TYPE_STRING,
            'position' => Schema::TYPE_STRING,
            'picture' => Schema::TYPE_STRING,
            'socialTwitter' => Schema::TYPE_STRING,
            'socialFacebook' => Schema::TYPE_STRING,
            'socialLinkedIn' => Schema::TYPE_STRING,
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
