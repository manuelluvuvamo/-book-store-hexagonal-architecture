<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryExternalBD1 extends Model
{
    use HasFactory;
    
    protected $connection = 'external_db1';
    protected $table = 'categories';
    protected $fillable = ['category_name'];
}
