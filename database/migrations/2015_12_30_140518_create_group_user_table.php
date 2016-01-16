<?php

require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateGroupUserTable extends BasicCreateTableMigrationAbstract
{
    protected $_tableName = 'group_user';
	protected $_hasIdColumn = false;
    protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
    	$table->unsignedMediumInteger('user_id');
    	$table->unsignedMediumInteger('group_id');
    	$table->index(['user_id'], 'user_id');
    	$table->index(['group_id'], 'group_id');
    }
}
