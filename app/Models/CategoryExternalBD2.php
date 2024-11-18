<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryExternalBD2 extends Model
{
    use HasFactory;

    protected $connection = 'external_db2';
    protected $table = 'Categories';
    protected $fillable = ['CategoryName'];
}
