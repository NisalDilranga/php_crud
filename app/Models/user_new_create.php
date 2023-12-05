<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_new_create extends Model
{
    use HasFactory;

    protected $fillable = [
        'fstNme',
        'lstNme',
        'phn'
    ];

}
