<?php

namespace App\Modules\System\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Abstracts\Models\BaseModel;

class Credential extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'credential';
}
