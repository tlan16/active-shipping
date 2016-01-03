<?php

namespace App\Modules\MoneyPool\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Abstracts\Models\BaseModel;


class Group_User extends BaseModel
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'group_user';
    public function group()
    {
    	return $this->belongsTo(\App\Modules\MoneyPool\Models\Group::class, 'groupId');
    }
    public function user()
    {
    	return $this->belongsTo(\App\Modules\System\Models\User::class, 'userId');
    }
}
