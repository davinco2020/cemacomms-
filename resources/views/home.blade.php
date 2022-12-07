@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cema Communications Ltd</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/newstock">New Stocks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/stocks">Stocks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sales">Sales</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@endsection