<?php

require_once __DIR__ . '/BasicCreateTableMigrationAbstract.php';

class CreateShipmentTable extends BasicCreateTableMigrationAbstract
{
    protected $_tableName = 'shipments';
    protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
        $table->unsignedMediumInteger('client_id');
        $table->unsignedMediumInteger('shipper_id');
        $table->date('date');
        $table->date('ETD')->nullable();
        $table->date('ETA')->nullable();
        $table->char('PO_numbers');
        $table->unsignedMediumInteger('POL');
        $table->unsignedMediumInteger('PLD');
        $table->char('comments');

        $table->index(['client_id'], 'client_id');
		$table->index(['shipper_id'], 'shipper_id');
		$table->index(['date'], 'date');
		$table->index(['ETD'], 'ETA');
		$table->index(['PO_numbers'], 'PO_numbers');
		$table->index(['POL'], 'POL');
		$table->index(['PLD'], 'PLD');
    }
}