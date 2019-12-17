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
    
    
   
    <button type="submit" class="btn btn-primary">Submit</button>

  
    
    @csrf
  </form>

<ul class="mt-2">
   @foreach ($customers as  $customer)
<li>{{ $customer->name }} <small class="text-muted">{{$customer->email}}</small></li>
   @endforeach
</ul>    
@endsection
