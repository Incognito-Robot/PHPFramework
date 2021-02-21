<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'users';

    public function board(){
        return $this->belongsTo('App\Models\Board');
    }
    public function boardUser(){
        return $this->hasOne('App\Models\BoardUser');
    }
    public function attachment(){
        return $this->hasOne('App\Models\Attachment');
    }
    public function comment(){
        return $this->hasOne('App\Models\Comment');
    }
    public function taskUser(){
        return $this->hasOne('App\Models\TaskUser');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
