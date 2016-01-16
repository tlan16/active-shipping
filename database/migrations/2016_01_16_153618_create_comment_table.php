<?php

require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateCommentTable extends BasicCreateTableMigrationAbstract
{
    protected $_tableName = 'comments';
    protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
    	$table->char('name', 50);
    	$table->char('code', 25);
		$table->index(['name'], 'name');
		$table->index(['code'], 'code');
    }
}