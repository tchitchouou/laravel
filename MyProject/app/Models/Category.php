<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $table = 'category';

    use HasFactory;

    public $timestamps = false;

    public function task() {
        return $this->hasMany('App\Models\Task');
    }
}
