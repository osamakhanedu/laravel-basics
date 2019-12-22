@extends('layout.index')


@section('content')
<h2>customer</h2>


<form action="customers" method="POST">
  
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" aria-describedby="name">
    <small class="text-danger">{{ $errors->first('name') }}</small>
      
    </div>
    
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" value="{{old('email')}}" name="email" aria-describedby="email">
    <small class="text-danger">{{ $errors->first('email') }}</small>
      
    </div>
    
    <div class="form-group">
      
      <label >Status</label>
      <select value="" name="active" id="active"  class="form-control">
        <option value="" disabled>Select custommer status</option>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
      
      </select>
      <small class="text-danger">{{ $errors->first('active') }}</small>
    </div>
    
    <div class="form-group">
      
      <label >Company</label>
      <select value="" name="company_id" id="company_id"  class="form-control">
        <option value="" disabled>Select company</option>
        @foreach ($companies as $company)
      <option value="{{$company->id}}" >{{ $company->name }}</option>
        @endforeach
      
      </select>
      <small class="text-danger">{{ $errors->first('active') }}</small>
    </div>
    
   
    <button type="submit" class="btn btn-primary">Submit</button>

  
    
    @csrf
  </form>

  <hr>
  <div class="row">
    <div class="col-6">
      <h3>Active Customers</h3>
      <ul class="mt-2">

        @foreach ($activeCustomers as  $customer)
     <li>{{ $customer->name }} <small class="text-muted">{{$customer->company->name}}</small></li>
        @endforeach
     </ul>    
    </div>
    <div class="col-6">
      
      <h3>Inactive Customers</h3>
      <ul class="mt-2">
        @foreach ($inactiveCustomers as  $customer)
     <li>{{ $customer->name }} <small class="text-muted">{{$customer->company->name}}</small></li>
        @endforeach
     </ul>    
    </div>
  </div>


  <div class="row">
    <div class="col-12">
       @foreach ($companies as $c)
    <h3>{{ $c->name }}</h3>

        <ul>
        @foreach ($c->customers as $customer)
        <li>{{ $customer->name}}</li>
            
        @endforeach
      </ul>
           
       @endforeach
    </div>
  </div>

@endsection
