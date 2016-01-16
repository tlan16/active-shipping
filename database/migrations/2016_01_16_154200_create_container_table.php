<?php

require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateContainerTable extends BasicCreateTableMigrationAbstract
{
    protected $_tableName = 'containers';
    protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
		$table->unsignedMediumInteger('shipment_id');
		$table->char('type', 50);
		$table->char('container_number', 100);
		$table->index(['shipment_id'], 'shipment_id');
		$table->index(['type'], 'type');
		$table->index(['container_number'], 'container_number');
    }
}