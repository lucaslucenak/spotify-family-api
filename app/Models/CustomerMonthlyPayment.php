<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerMonthlyPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'monthly_payment_id',
        'is_paid'
    ];
}
