<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $table = 'tasks';
	public function category(){
		return $this->belongsTo('App\Models\Category');
	}
	public function board(){
		return $this->belongsTo('App\Models\Board');
	}
	public function attachment(){
		return $this->hasMany('App\Models\Attachment');
	}
	public function comment(){
		return $this->hasOne('App\Models\Comment');
	}
	public function taskUser(){
		return $this->hasOne('App\Models\TaskUser');
	}
	public function boardUser(){
		return $this->belongsTo('App\Models\BoardUser');
	}

    use HasFactory;
}
