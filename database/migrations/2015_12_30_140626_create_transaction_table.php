<?php
require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateTransactionTable extends BasicCreateTableMigrationAbstract
{
	protected $_tableName = 'transaction';
	protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
		$table->integer('poolId');
		$table->double('amount', 14, 2);
		$table->char('transGroupId', 32);
		$table->char('comments', 100);
		$table->index(['poolId'], 'poolId');
		$table->index(['comments'], 'comments');
		$table->index(['transGroupId'], 'transGroupId');
	}
}