<?php

require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateClientTable extends BasicCreateTableMigrationAbstract
{
    protected $_tableName = 'clients';
    protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
		$table->char('name', 50);
		$table->unsignedMediumInteger('user_id')->nullable();
		$table->index(['name'], 'name');
		$table->index(['user_id'], 'user_id');
    }
}