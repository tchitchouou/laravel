<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
    ];

    protected $table = 'users';

    public $timestamps = false;

    public function attachment(){
        return $this->hasMany('App\Models\Attachment', 'users_id');
    }

    public function task(){
        return $this->hasMany('App\Models\Task', 'users_id');
    }

    public function tasks() {
        return $this->belongsToMany('App\Models\Task');
    }

    public function comment() {
        return $this->hasMany('App_Models\Comment','users_id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
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
