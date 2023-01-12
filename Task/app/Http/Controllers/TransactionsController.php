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
        return view('Home.index', ['Transactions' => $Transactions]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'first_person' => ['required'],
                'second_person' => ['required'],
            ],

        );

        // Create Transactions
        $first_result = 1;
        $second_result = 1;
        $request?->first_credit_amount ? $first_result = $request?->first_credit_amount + (-$request?->second_debit_amount) : $second_result = (-$request?->first_debit_amount) + $request?->second_credit_amount;

        if ($first_result == 0) {
            $Transaction = new Transactions();
            $Transaction->credit_amount = $request->first_credit_amount;
            $Transaction->debit_amount = (-$request->second_debit_amount);
            $Transaction->first_person = $request->first_person;
            $Transaction->second_person = $request->second_person;
            $Transaction->creditor = $request->first_person;
            $Transaction->debtors = $request->second_person;
            $Transaction->save();
            return redirect('/')->with("success", "Submit data successfully");
        } else if ($second_result == 0) {
            $Transaction = new Transactions();
            $Transaction->credit_amount = $request->second_credit_amount;
            $Transaction->debit_amount = (-$request->first_debit_amount);
            $Transaction->first_person = $request->first_person;
            $Transaction->second_person = $request->second_person;
            $Transaction->creditor = $request->second_person;
            $Transaction->debtors = $request->first_person;
            $Transaction->save();
            return redirect('/')->with("success", "Submit data successfully");
        } else {
            return redirect('/')->with('errors', 'The cash not balenced');
        }
    }
}