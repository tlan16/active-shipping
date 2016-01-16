<?php
use Illuminate\Database\Migrations\Migration;
abstract class BasicCreateTableMigrationAbstract extends Migration {
	
	protected $_tableName = '';
	protected $_hasIdColumn = true;
	protected function _extraColumns(App\Modules\Abstracts\Models\Blueprint $table) {
		
	}
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		$schema = DB::connection ()->getSchemaBuilder ();
		
		$schema->blueprintResolver ( function ($table, $callback) {
			return new \App\Modules\Abstracts\Models\Blueprint ( $table, $callback );
		} );
		
		$schema->create ( $this->_tableName, function (App\Modules\Abstracts\Models\Blueprint $table) {
			if($this->_hasIdColumn)
				$table->baseEntityIdColumn();
			$this->_extraColumns($table);
			$table->basicEntityColumns ();
		} );
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists ( $this->_tableName );
	}
}