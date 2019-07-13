@extends('master')
@section('content')
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Adress</th>
    </tr>
  </thead>
  <tbody>
    @foreach($test as $value)
    <tr>
      <th scope="row">1</th>
      <td>{{$value['name']}}</td>
      <td>{{$value['age']}}</td>
      <td>{{$value['address']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection