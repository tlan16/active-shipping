<?php
require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateMoneypoolTable extends BasicCreateTableMigrationAbstract
{
	protected $_tableName = 'moneypools';
	protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
		$table->char('entity_name', 100);
		$table->integer('entity_id');
		$table->double('amount', 14, 2);
		$table->index(['entity_name'], 'entity_name');
		$table->index(['entity_id'], 'entity_id');
	}
}
