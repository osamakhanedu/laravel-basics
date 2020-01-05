@extends('layouts.app')


@section('content')
<h2>Edit Detail for {{$customer->name}}</h2>
 

<form action="/customers/{{$customer->id}}" method="POST">
   
    @method('PUT')
    @include('customers.form')
  
    
  </form>


@endsection
