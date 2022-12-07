<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('sales')
    <div class="container">
        <div class="row">
@section('nav')
<div class="col-10">
      
    <h2>Welcome!</h2>
  
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="modall" data-bs-target="#searchsale" aria-current="page" href="/sales">New Sales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="" id="" data-bs-toggle="modal" data-bs-target="#todaysale">Today Sales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/allsales">All Sales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/allstaff">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/allstaff">Search</a>
      </li>
    </ul>
  </div>
@endsection
        </div>
        <div class="row"></div>
    </div>
</body>
</html>