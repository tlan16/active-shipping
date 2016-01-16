<?php

require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateRoleUserTable extends BasicCreateTableMigrationAbstract
{
    protected $_tableName = 'role_user';
	protected $_hasIdColumn = false;
    protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
    	$table->integer('user_id');
    	$table->integer('role_id');
    	$table->index(['user_id'], 'user_id');
    	$table->index(['role_id'], 'role_id');
    }
}