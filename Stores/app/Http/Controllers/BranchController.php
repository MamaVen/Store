<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
	public function index(){
		$branch = branch::get();
	    return view('branch.index', compact('branch'));
	}

	public function create(){
		$stores = ['store1','store2','store3','store4',];
		return view('branch.create',compact('stores'));
	}
	 public function store(){ 
        request()->validate([
            'branch_name' => 'required',
            'transaction' => 'required',
            'product' => 'required',
            'storehouse' => 'required',
        ]);
        $branch = new branch;
        $branch->branch_name = request()->name;
        $branch->product = request()->product;
        $branch->transaction = request()->transaction;
        $branch->storehouse = request()->storehouse;
        $branch->save();

        return redirect('/branch');
    }
     public function edit(branch $branch) 
    { 
		$stores = ['store1','store2','store3','store4',];
		return view('branch.edit',compact('stores'));
    } 
    public function update(branch $branch)
    {

        $validated_fields = request()->validate([

            'branch_name' => 'required',
            'transaction' => 'required',
            'product' => 'required',
            'storehouse' => 'required',
        ]);
        $branch->update($validated_fields);

        return redirect('/branch');
    }

    public function delete(branch $branch) 
    {
        $branch->delete();
        return redirect('/branch');
    }
}
