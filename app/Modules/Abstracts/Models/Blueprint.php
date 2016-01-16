<?php
namespace App\Modules\Abstracts\Models;

use Illuminate\Support\Facades\DB;
class Blueprint extends \Illuminate\Database\Schema\Blueprint {
	public function baseEntityIdColumn() {
		$this->engine = 'InnoDB';
		$this->increments('id');
	}
	
	/**
	 * Add creation and update timestamps to the table.
	 *
	 * @return void
	 */
	public function basicEntityColumns()
	{
		$this->boolean('active');
		$this->timestamp('created');
		$this->unsignedMediumInteger('created_by');
		$this->timestamp('updated');
		$this->unsignedMediumInteger('updated_by');
		
		$this->index(['active'], 'active');
		$this->index(['created'], 'created');
		$this->index(['created_by'], 'created_by');
		$this->index(['updated'], 'updated');
		$this->index(['updated_by'], 'updated_by');
	}
}
