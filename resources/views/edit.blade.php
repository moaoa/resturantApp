@extends('layout')

@section('content')
<form action="/update/{{ $resto->id }}" method="POST">
@method('PUT')
@csrf
<h3 class="mt-3" >Edit resturant</h3>
  <div class="form-group mt-5 mb-3">
    <input value="{{ $resto->name }}" name="name" type="text" class="form-control" id="exampleInputEmail1"  required placeholder="Enter name">
  </div>
  <div class="form-group mb-3">
    <input value="{{ $resto->email }}"  name="email" type="email" required class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
  </div>
  <div class="form-group mb-3">
    <input value="{{ $resto->address }}"  
        name="address" 
        type="text" 
        required 
        class="form-control"  
        placeholder="Enter address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop