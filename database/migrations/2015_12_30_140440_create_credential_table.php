<?php

use App\Modules\System\Models\Credential;
require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';
class CreateCredentialTable extends BasicCreateTableMigrationAbstract
{
    protected $_tableName = 'credential';
    protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
    	$table->integer('userId');
    	$table->char('username', 50);
    	$table->char('password', 100);
    	$table->enum('type', Credential::getCredentialTypes());
    	$table->index(['userId'], 'userId');
    	$table->index(['username'], 'username');
    	$table->index(['password'], 'password');
    	$table->index(['type'], 'type');
    }
}
