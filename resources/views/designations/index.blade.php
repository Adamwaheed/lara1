@extends('layout')
@section('page')

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        Designation
      </a>
    </div>
  </nav>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($designations as $designation)
      <tr>
        <td>{{$designation->id}}</td>
        <td>{{$designation->name}}</td>
        <td>{{$designation->description}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>

@endsection
