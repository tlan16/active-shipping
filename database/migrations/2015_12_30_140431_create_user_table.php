<?php

require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';
class CreateUserTable extends BasicCreateTableMigrationAbstract
{
    protected $_tableName = 'users';
    protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
    	$table->char('firstname', 100);
    	$table->char('lastname', 100);
    	$table->char('email', 100);
    	$table->index(['firstname'], 'firstname');
    	$table->index(['lastname'], 'lastname');
    	$table->index(['email'], 'email');
    }
}
