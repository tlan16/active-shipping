<?php
require_once __DIR__ . '/BasicTableSeederAbstract.php';
class RoleTableSeeder extends BasicTableSeederAbstract {
	protected $_entityName = App\Modules\System\Models\Role::class;
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
		} );
	}
}
