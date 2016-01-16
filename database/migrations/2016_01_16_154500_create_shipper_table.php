<?php

require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateShipperTable extends BasicCreateTableMigrationAbstract
{
    protected $_tableName = 'shippers';
    protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
		$table->char('name', 50);
		$table->index(['name'], 'name');
    }
}