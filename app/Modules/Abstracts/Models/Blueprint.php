<?php
namespace App\Modules\Abstracts\Models;

class Blueprint extends \Illuminate\Database\Schema\Blueprint {
	
	/**
	 * Add creation and update timestamps to the table.
	 *
	 * @return void
	 */
	public function basicEntityColumns()
	{
		$this->increments('id');
		$this->boolean('active');
		$this->timestamp('created');
		$this->integer('createdById');
		$this->timestamp('updated');
		$this->integer('updatedById');
	}
}
