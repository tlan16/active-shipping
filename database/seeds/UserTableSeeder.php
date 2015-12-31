<?php

use App\Modules\System\Models\Credential;
use App\Modules\MoneyPool\Models\MoneyPool;
require_once __DIR__ . '/BasicTableSeederAbstract.php';

class UserTableSeeder extends BasicTableSeederAbstract
{
	protected $_entityName = App\Modules\System\Models\User::class;
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory ( $this->_entityName, 50 )->create()->each ( function ($item) {
			$item->createdBy()->associate($item);
			$item->updatedBy()->associate($item);
			$item->save();
			foreach(Credential::getCredentialTypes() as $type) {
				factory(Credential::class)->create(['userId' => $item->id, 'type' => $type, 'updatedById' => $item->id, 'createdById' => $item->id]);
			}
			$pool = factory ( MoneyPool::class)->make();
			$pool->entityName = get_class($item);
			$pool->entityId = $item->id;
			$pool->createdBy()->associate($item);
			$pool->updatedBy()->associate($item);
			$pool->save();
		} );
	}
}
