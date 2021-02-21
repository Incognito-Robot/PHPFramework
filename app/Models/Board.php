<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{   
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public function user(){
        return $this->hasMany('App\Models\User');
    }
    public function task(){
        return $this->hasMany('App\Models\Task');
    }
    public function boardUser(){
        return $this->hasOne('App\Models\BoardUser');
    }

    use HasFactory;
    protected $table = 'boards';
}
