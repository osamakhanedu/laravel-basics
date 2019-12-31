@extends('layout.index')


@section('content')
<h2> Detail for {{$customer->name}}</h2>
<p><a href="/customers/{{$customer->id}}/edit">Edit</a></p>

<form action="/customers/{{$customer->id}}" method="post">
   @method('DELETE')
   @csrf

   <button type="submit" class="btn btn-danger">Delete</button>
</form>

<div class="row">
    <div class="col-12">

    <p><strong>Name</strong>{{ $customer->name}}</p>
        <p><strong>Email</strong> {{ $customer->email}}</p>
        <p><strong>Company</strong> {{ $customer->company->name}}</p>

    </div>
</div>


@endsection
