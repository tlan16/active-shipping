<?php

namespace App\Modules\System\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Abstracts\Models\BaseModel;

class Credential extends BaseModel {
	const TYPE_NORMAL = 1;
	const TYPE_PASSWORD_RESET = 2;
	const TYPE_API_TOKEN = 3;
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'credential';
	public static function getCredentialTypes() {
		return [
    		self::TYPE_API_TOKEN, self::TYPE_NORMAL, self::TYPE_PASSWORD_RESET
    	];
	}
	public function user() {
		$this->belongsTo(\App\Modules\System\Models\User::class, 'userId');
	}
}
