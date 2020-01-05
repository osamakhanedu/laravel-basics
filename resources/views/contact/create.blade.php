@extends('layout.index')

@section('content')
    
<h1>Contact Us</h1>

<div class="row">
  <div class="col-12">
   <form action="/contact" method="post">
   
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
   <label for="message" >Message</label>
   <textarea class="form-control" name="message"  rows="5">
   {{old('message')}}
   </textarea>
   <small class="text-danger">{{ $errors->first('message') }}</small> 
  </div>

  @csrf

  <button type="submit" class="btn btn-primary">Send Message</button>

  
   </form>
  </div>
</div>

@endsection