<?php

namespace App\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryExternalBD2 extends Model
{
    protected $connection = 'external_db2';
    protected $table = 'Categories';
    protected $fillable = ['CategoryName'];
}
