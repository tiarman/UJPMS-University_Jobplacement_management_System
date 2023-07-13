<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model {
  protected $table = 'payments';
  protected $fillable = [
    'transaction_no', 'payment_date', 'amount', 'next_due_date', 'bill_type', 'method'
  ];

  public static $typesArray = ['Monthly', 'Yearly'];
  public static $methodsArray = ['bKash', 'Nagad', 'Bank'];
}
