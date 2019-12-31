<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" value="{{old('name') ?? $customer->name}}" name="name" aria-describedby="name">
  <small class="text-danger">{{ $errors->first('name') }}</small>
    
  </div>
  
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" value="{{old('email') ?? $customer->email}}" name="email" aria-describedby="email">
  <small class="text-danger">{{ $errors->first('email') }}</small>
    
  </div>
  
  <div class="form-group">
    
    <label >Status</label>
  <select value="" name="active" id="active"  class="form-control">

     @foreach ($customer->activeOptions() as $activeOptionKey=> $activeOptionValue)
     
  <option value="{{ $activeOptionKey}}" {{ $customer->active === $activeOptionValue?'selected':''}} >{{$activeOptionValue}}</option>

     @endforeach

     
      {{-- <option value="1" {{ $customer->active ==='Active'?'selected':''}}>Active</option>
      <option value="0" {{ $customer->active === 'Inactive'?'selected':''}}>Inactive</option>
     --}}
    </select>
    <small class="text-danger">{{ $errors->first('active') }}</small>
  </div>
  
  <div class="form-group">
    
    <label >Company</label>
  <select value="" name="company_id" id="company_id"  class="form-control">
      <option value="" disabled>Select company</option>
      @foreach ($companies as $company)
    <option value="{{$company->id}}" {{$customer->company_id === $company->id? 'selected':''}} >{{ $company->name }}</option>
      @endforeach
    
    </select>
    <small class="text-danger">{{ $errors->first('active') }}</small>
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>

  
  @csrf