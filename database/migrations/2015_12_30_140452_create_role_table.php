<?php
require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';
class CreateRoleTable extends BasicCreateTableMigrationAbstract
{
    protected $_tableName = 'role';
    protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
    	$table->char('name', 50);
    	$table->index(['name'], 'name');
    }
}

