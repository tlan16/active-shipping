<?php
require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateTransactionTable extends BasicCreateTableMigrationAbstract
{
	protected $_tableName = 'transaction';
}