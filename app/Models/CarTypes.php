<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarTypes extends Model
{
    use HasFactory;
    protected $fillable = ['image','type','name', 'year', 'color'];
}
