@extends('layout.index')


@section('content')
<h2>List Customer</h2>

   <a href="customers/create">Create Customer</a>

  <hr>
  <div class="row">
    <div class="col-6">
      <h3> Customers</h3>
      <ul class="mt-2">

        @foreach ($customers as  $customer)

        <div class="row">
        <div class="col-2"> {{ $customer->id}}</div>
        <div class="col-4">
          <a href="/customers/{{$customer->id}}"> {{$customer->name}}</a>
        </div>
          <div class="col-4">{{$customer->company->name}}</div>
          <div class="col-2">{{$customer->active}}</div>
        </div>

        @endforeach
     </ul>    
    </div>
   
  </div>


 

@endsection
