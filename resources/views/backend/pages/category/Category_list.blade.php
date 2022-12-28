@extends('backend.master')
@section('content')

<h1 class="text-center">Medicine_Category</h1>
<h1><a class="btn btn-primary" href="{{route('cform')}}">Back</a></h1>
<div class="container">

<form class="form" action="{{route('database')}}" method="POST">
    @csrf
    <div class="form-group">
    <label for="text">SL_NO:</label>
    <input type="number" class="form-control" id="number" Name="SL_NO">
</div>

  <div class="form-group">
    <label for="text">Category_Name:</label>
    <input type="text" class="form-control" placeholder="Enter your Name" id="name" Name="Name">
  </div>

  <div class="form-group">
    <label for="pwd">Type:</label>
    <input type="text" class="form-control" placeholder="Enter Type" id="name"
     Name="Type">
  </div>

  <div class="form-group">
    <label for="pwd">Amount:</label>
    <input type="text" class="form-control" placeholder="Enter Type" id="name"
     Name="Amount">
  </div>

  <div class="form-group">
    <label for="text">In_Stock:</label>
    <input type="number" class="form-control" id="stock" Name="In_Stock">
</div>

    <div class="form-group">
    <label for="text">Stock_Out:</label>
    <input type="number" class="form-control" id="name" Name="Stock_Out">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection