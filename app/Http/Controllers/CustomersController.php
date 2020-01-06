<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomersController extends Controller
{
    //


    public function __construct()
    {
        # code...
        // $this->middleware('auth');
         $this->middleware('auth')->except(['index']);
    }

     public function index()
    {

        // $activeCustomers = Customer::active()->get();
        // $inactiveCustomers = Customer::inactive()->get();
        // $companies = Company::all();
         $customers = Customer::all();
    
        return view('customers.index',compact('customers'));    
        
    }

    public function create()
    {
        # code...
        $companies = Company::all();
        $customer = new Customer();
        return view('customers.create',compact('companies','customer'));
    }

    public function store()
    {

        Customer::create($this->validateRequest());

        // $customer = new Customer();
        // $customer->name = request('name');
        // $customer->email = request('email');
        // $customer->active = request('active');
        // $customer->save();

        return redirect('customers');
    }

    // route model binding
    public function show(Customer $customer)
    {
        // $customer = Customer::where("id",$customer)->firstOrFail();
        
        return view('customers.show',compact('customer'));
    }
    public function edit(Customer $customer)
    {
        // $customer = Customer::where("id",$customer)->firstOrFail();
        
        $companies = Company::all();
        return view('customers.edit',compact('customer','companies'));
    }
    public function update(Customer $customer)
    {
        // $customer = Customer::where("id",$customer)->firstOrFail();
        
        $customer->update($this->validateRequest());

        return redirect('customers/'.$customer->id);
        // return view('customers.show',compact('customer'));
    }
    public function destory(Customer $customer)
    {
        
        $customer->delete();

        return redirect('customers/');
    }

    private function validateRequest(){
        return request()->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email',
            'active'=> 'required',
            'company_id'=>'required'
        ]);
      
    }
}
