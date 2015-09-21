<?php

use yii\db\Schema;
use yii\db\Migration;

class m150921_104849_rename_tables_fields extends Migration
{
    public function up()
    {
        $this->renameColumn('user', 'auth_key', 'authKey');
        $this->renameColumn('user', 'password_hash', 'passwordHash');
        $this->renameColumn('user', 'password_reset_token', 'passwordResetToken');
        $this->renameColumn('user', 'created_at', 'createdAt');
        $this->renameColumn('user', 'updated_at', 'updatedAt');
    }

    public function down()
    {
        $this->renameColumn('user', 'authKey', 'auth_key');
        $this->renameColumn('user', 'passwordHash', 'password_hash');
        $this->renameColumn('user', 'passwordResetToken', 'password_reset_token');
        $this->renameColumn('user', 'createdAt', 'created_at');
        $this->renameColumn('user', '', 'updated_at');
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
