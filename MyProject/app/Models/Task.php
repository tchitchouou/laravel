<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'due_date',
        'state',
        'users_id',
    ];

    protected $table = 'tasks';
    protected $primarykey = 'tasks_id';

    public $timestamps = false;

    use HasFactory;

    public function user() {
        return $this->belongsToMany('App\Models\User');
    }

    public function users() {
        return $this->belongsTo('App\Models\User');
    }

    public function attachment() {
        return $this->hasMany('App\Models\Attachment','task_id');
    }

    public function comment() {
        return $this->hasMany('App\Models\Comment','task_id');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
