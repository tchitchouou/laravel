<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable = [
        'file_name',
        'size',
        'title',
        'blob',
        'tasks_id',
        'users_id'
    ];

    protected $table = 'attachments';

    use HasFactory;

    public $timestamps = false;

    public function user() {
        return $this->belongsTo('App_Models\User');
    }

    public function task() {
        return $this->belongsTo('App_Models\Task');
    }
}
