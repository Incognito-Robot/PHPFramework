<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BoardUser extends Pivot
{
	protected $table = 'board_user';
	public function user(){
	    return $this->belongsTo('App\Models\User');
	}
	public function board(){
		return $this->belongsTo('App\Models\Board');
	}
	public function task(){
		return $this->hasMany('App\Models\Task');
	}
	use HasFactory;
	public $incrementing = true;
}
