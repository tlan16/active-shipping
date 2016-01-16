<?php

require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateRoleUserTable extends BasicCreateTableMigrationAbstract
{
    protected $_tableName = 'role_user';
	protected $_hasIdColumn = false;
    protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
    	$table->text('content');
    }
}