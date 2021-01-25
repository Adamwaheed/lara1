@extends('layout')



@section('page')

<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        Employee
      </a>
    </div>
  </nav>



<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Number</th>
        <th scope="col">Salary</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($employeeList as $employee)
      <tr>
        <td>{{$employee->id}}</td>
        <td>{{$employee->name}}</td>
        <td>{{$employee->number}}</td>
        <td>{{$employee->salary}} mvr</td>
      </tr>
      @endforeach

    </tbody>
  </table>

@endsection
