<?php

require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateGroupTable extends BasicCreateTableMigrationAbstract
{
	protected $_tableName = 'group';
	protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
		$table->char('name', 100);
		$table->char('description', 255);
		$table->index(['name'], 'name');
	}
}