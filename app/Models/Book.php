<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\BookController;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'bname',
        'authname',
        'copies',
        'genre',
        'pubdate',
    ];

  

}
