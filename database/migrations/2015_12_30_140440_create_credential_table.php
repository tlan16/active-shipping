<?php

use App\Modules\System\Models\Credential;
require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';
class CreateCredentialTable extends BasicCreateTableMigrationAbstract
{
    protected $_tableName = 'credentials';
    protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
		$table->unsignedMediumInteger('user_id');
		$table->char('username', 50);
		$table->char('password', 100);
		$table->enum('type', Credential::getCredentialTypes());
		$table->index(['user_id'], 'user_id');
		$table->index(['username'], 'username');
		$table->index(['password'], 'password');
		$table->index(['type'], 'type');
	}
}
