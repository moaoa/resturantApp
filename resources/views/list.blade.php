@extends('layout')

@section('content')
<ul>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    @foreach($resturants as $resto)
    <tr>
      <th scope="row"> <a href="/edit/{{ $resto->id }}">{{$resto->id}}</a> </th>
      <td>{{ $resto->name }}</td>
      <td>{{ $resto->email }}</td>
      <td>{{ $resto->address }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</ul>
@stop

