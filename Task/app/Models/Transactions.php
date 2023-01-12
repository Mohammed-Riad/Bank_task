<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transactions extends Model
{
    use HasFactory;

// Determine the things that you need to upload to Database
    protected $fillable = [

        'name',
        'credit_amount',
        'debit_amount',

    ];
    // End
 
    
}
