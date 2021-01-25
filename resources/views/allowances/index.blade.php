@extends('layout')
@section('page')

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        Allowance
      </a>
    </div>
  </nav>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">Description</th>
        <th scope="col">Amount</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($listOfAllowance as $singleItem)
      <tr>
        <td>{{$singleItem->id}}</td>
        <td>{{$singleItem->name}}</td>
        <td>{{$singleItem->amount}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>

@endsection
