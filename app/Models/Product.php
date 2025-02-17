<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Optionally, define fillable properties
    protected $fillable = ['name', 'detail'];
}
