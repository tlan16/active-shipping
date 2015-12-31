<?php
namespace App\Modules\Abstracts\Models;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * Get the creator
     */
    public function createdBy()
    {
    	return $this->belongsTo(\App\Modules\System\Models\User::class, 'createdById');
    }
    /**
     * Get the updater
     */
    public function updatedBy()
    {
    	return $this->belongsTo(\App\Modules\System\Models\User::class, 'updatedById');
    }
}
