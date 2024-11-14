<?php

namespace App\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryExternalBD1 extends Model
{
    protected $connection = 'external_db1';
    protected $table = 'categories';
    protected $fillable = ['category_name'];
}
