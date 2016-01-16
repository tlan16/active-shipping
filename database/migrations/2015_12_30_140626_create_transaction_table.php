<?php
require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateTransactionTable extends BasicCreateTableMigrationAbstract
{
	protected $_tableName = 'transaction';
	protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
		$table->integer('moneypool_id');
		$table->double('amount', 14, 2);
		$table->char('trans_group_id', 32);
		$table->char('comments', 100);
		$table->index(['moneypool_id'], 'moneypool_id');
		$table->index(['comments'], 'comments');
		$table->index(['trans_group_id'], 'trans_group_id');
	}
}