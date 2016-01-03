<?php

require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateGroupUserTable extends BasicCreateTableMigrationAbstract
{
    protected $_tableName = 'group_user';
    protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
    	$table->integer('userId');
    	$table->integer('groupId');
    	$table->index(['userId'], 'userId');
    	$table->index(['groupId'], 'groupId');
    }
}
