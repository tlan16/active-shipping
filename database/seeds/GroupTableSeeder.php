<?php
use App\Modules\MoneyPool\Models\MoneyPool;
require_once __DIR__ . '/BasicTableSeederAbstract.php';
class GroupTableSeeder extends BasicTableSeederAbstract {
	protected $_entityName = App\Modules\MoneyPool\Models\Group::class;
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory ( $this->_entityName, 50 )->create()->each ( function ($item) {
			$user = factory(App\Modules\System\Models\User::class)->make(['id' => 1]);
			$item->createdBy()->associate($user);
			$item->updatedBy()->associate($user);
			$item->save();
			
			$pool = factory ( MoneyPool::class)->make();
			$pool->entityName = get_class($item);
			$pool->entityId = $item->id;
			$pool->createdBy()->associate($user);
			$pool->updatedBy()->associate($user);
			$pool->save();
			
		} );
		
		factory ( App\Modules\MoneyPool\Models\Group_User::class, 50 )->create();
	}
}
