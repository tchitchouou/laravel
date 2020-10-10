<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'text',
        'tsks_id',
        'users_id',
    ];
    
    protected $table = 'comments';

    use HasFactory;

    public function user() {
        return $this->belongsTo('App_Models\User');
    }

    public function task() {
        return $this->belongsTo('App_Models\Task');
    }
}
