@extends('layout')

@section('content')
<form action="/store" method="POST">
@csrf
    <h3 class="mt-3" >Add your resturant</h3>
  <div class="form-group mt-5 mb-3">
    <input name="name" type="text" class="form-control" id="exampleInputEmail1"  required placeholder="Enter name">
  </div>
  <div class="form-group mb-3">
    <input name="email" type="email" required class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
  </div>
  <div class="form-group mb-3">
    <input name="address" type="text" required class="form-control" id="exampleInputPassword1" placeholder="Enter address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop