<?php

require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';
class CreateUserTable extends BasicCreateTableMigrationAbstract
{
    protected $_tableName = 'user';
}
