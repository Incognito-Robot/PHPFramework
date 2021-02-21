<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class taskUser extends Pivot
{
    use HasFactory;
    public $incrementing = true;
    protected $table = 'task_user';
    
    public function user(){
    	return $this->belongsTo('App\Models\User');
    }
    public function task(){
    	return $this->belongsTO('App\Models\Task');
    }
}
