<?php
require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateMoneypoolTable extends BasicCreateTableMigrationAbstract
{
	protected $_tableName = 'moneypool';
	protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
		$table->char('entityName', 100);
		$table->integer('entityId');
		$table->double('amount', 14, 2);
		$table->index(['entityName'], 'entityName');
		$table->index(['entityId'], 'entityId');
	}
}
