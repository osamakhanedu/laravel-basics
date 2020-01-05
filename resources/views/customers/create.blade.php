@extends('layouts.app')


@section('content')
<h2>Create Customer</h2>
 

<form action="/customers" method="POST">
  
    @include('customers.form')
  
    
  </form>


@endsection
