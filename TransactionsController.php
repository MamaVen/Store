<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionsController extends Controller
{
public function index(){
		$transaction = transaction::get();
	    return view('branch.index', compact('branch'));
	}

	public function create(){
		$transacts = ['transact1','transact2','transact3','transact4',];
		return view('transaction.create',compact('transacts'));
	}
	 public function store(){ 
        request()->validate([
            'branch_name' => 'required',
            'transaction' => 'required',
            'product' => 'required',
            'storehouse' => 'required',
        ]);
        $transaction = new transaction;
        $transaction->transaction = request()->transaction;
        $transaction->branch_name = request()->name;
        $transaction->product = request()->product;
        $transaction->storehouse = request()->storehouse;
        $transaction->save();

        return redirect('/transaction');
    }
     public function edit(transaction $transaction) 
    { 
		$transacts = ['transact1','transact2','transact3','transact4',];
		return view('transaction.edit',compact('transacts'));
    } 
    public function update(transaction $transaction)
    {

        $validated_fields = request()->validate([

            'branch_name' => 'required',
            'transaction' => 'required',
            'product' => 'required',
            'storehouse' => 'required',
        ]);
        $transaction->update($validated_fields);

        return redirect('/transaction');
    }

    public function delete(transaction $transaction) 
    {
        $transaction->delete();
        return redirect('/transaction');
    }
}
