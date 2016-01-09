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
		$this->integer('createdById');
		$this->timestamp('updated');
		$this->integer('updatedById');
		
		$this->index(['active'], 'active');
		$this->index(['created'], 'created');
		$this->index(['createdById'], 'createdById');
		$this->index(['updated'], 'updated');
		$this->index(['updatedById'], 'updatedById');
	}
}
