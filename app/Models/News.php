<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
           'name',
           'birth_date',
           'description',
           'is_active',
    ];
}
