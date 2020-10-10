<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participate extends Model
{
    protected $fillable = [
        'assigned',
        'tasks_id',
        'users_id',
    ];

    protected $table = 'participate';

    public $timestamps = false;

    use HasFactory;
}
