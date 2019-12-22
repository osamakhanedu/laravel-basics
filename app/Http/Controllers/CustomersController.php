<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomersController extends Controller
{
    //
     public function list()
    {

        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        $companies = Company::all();
        //  $customers = Customer::all();
    
        return view('internal.customer',compact('activeCustomers','inactiveCustomers','companies')
           
        );    
        
    }

    public function store()
    {

        $data = request()->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email',
            'active'=> 'required',
            'company_id'=>'required'
        ]);
      
        Customer::create($data);

        // $customer = new Customer();
        // $customer->name = request('name');
        // $customer->email = request('email');
        // $customer->active = request('active');
        // $customer->save();

        return back();
    }
}
