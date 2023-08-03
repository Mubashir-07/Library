<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Customer
 */
class Customer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'address', 'email', 'place', 'phone'];

    /**
     * transactions
     *
     * @return void
     */
    function transactions()
    {
        return $this->hasMany(Transaction::class, 'cust_id');
    }
}
