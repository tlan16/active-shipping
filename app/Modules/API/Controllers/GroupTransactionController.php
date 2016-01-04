<?php namespace App\Modules\API\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\System\Models\User;
use App\Modules\MoneyPool\Models\MoneyPool;
use App\Modules\MoneyPool\Models\Group;

class GroupTransactionController extends APIController {
	protected $_entityName = \App\Modules\MoneyPool\Models\Transaction::class;
	/**
	 * {@inheritDoc}
	 * @see \App\Modules\API\Controllers\APIController::show()
	 */
	public function show($groupId, $someId = null)
	{
		$class = trim($this->_entityName);
		$result = $class::with(['pool' => function ($query) use ($groupId) {
			$query->where('active', 1)->where('entityName', Group::class)->where('entityId', $groupId);
		}])->distinct()->get(['transGroupId']);
		$transGroupIds = [];
		foreach($result as $row)
			$transGroupIds[] = $row->transGroupId;
		$result = $class::where('transGroupId', $transGroupIds)->distinct()->get();
		$return = array();
		foreach($result as $transaction) {
			if(!isset($result[$transaction->transGroupId]))
				$result[$transaction->transGroupId] = [];
			$result[$transaction->transGroupId][] = $transaction->toArray();
		}
		return $result->toJson();
	}
}