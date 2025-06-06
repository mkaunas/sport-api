<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    /** @use HasFactory<\Database\Factories\SportsFactory> */
    use HasFactory;

    protected $guarded = ['id'];
}
