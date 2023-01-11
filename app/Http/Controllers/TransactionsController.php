<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionsController extends Controller
{
    //

    public function create()
    {
        
        $Transactions = Transactions::all();
        return view('Home.index', ['Transactions' =>$Transactions]);

    }


    public function store(Request $request)
    {
        //    dd($request->all());
        $formFields = $request->validate(
            [
                'name' => ['required'],
                'credit_amount' => ['required'],
                'debit_amount' => ['required'],
            ],

        );
        //Assign the new values

        // Create Transactions
        $Transactions = Transactions::create($formFields);
        return redirect('/');
    }

}