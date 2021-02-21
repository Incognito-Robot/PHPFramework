<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function task(){
        return $this->belongsTo('App\Models\Task');
    }
    use HasFactory;
    protected $table = 'comments';
}
