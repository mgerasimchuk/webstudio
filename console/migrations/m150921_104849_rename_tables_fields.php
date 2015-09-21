<?php

use yii\db\Schema;
use yii\db\Migration;

class m150921_104849_rename_tables_fields extends Migration
{
    public function up()
    {
        $this->renameColumn('user', 'authKey', 'authKey');
        $this->renameColumn('user', 'passwordHash', 'passwordHash');
        $this->renameColumn('user', 'passwordResetToken', 'passwordResetToken');
        $this->renameColumn('user', 'createdAt', 'createdAt');
        $this->renameColumn('user', 'updatedAt', 'updatedAt');
    }

    public function down()
    {
        $this->renameColumn('user', 'authKey', 'authKey');
        $this->renameColumn('user', 'passwordHash', 'passwordHash');
        $this->renameColumn('user', 'passwordResetToken', 'passwordResetToken');
        $this->renameColumn('user', 'createdAt', 'createdAt');
        $this->renameColumn('user', 'updatedAt', 'updatedAt');
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
