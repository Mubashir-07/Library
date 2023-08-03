<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['cust_id', 'book_id', 'taken_at', 'days', 'return_at'];

    public function CustomerDetail()
    {
        return $this->belongsTo(Customer::class, 'cust_id')->withTrashed();
    }

    public function BookDetail()
    {
        return $this->hasOne(Book::class, 'id', 'book_id');
    }
}
