@extends('layouts.sapp')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-2">
<div class="aside">
  <h2>Welcome!</h2>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/staff">New Staff</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/allstaff">Accounts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/marketers">Marketers</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/allstaff">All Staffs</a>
    </li>
  </ul>
 
</div>
    </div>
    <div class="col-10">





<div class="card">
    <h5 class="card-header">Sales</h5>
    <div class="card-body">
        <table border="2" class="table strip">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Date </th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Cost</th>
                <th>Total</th>


            </tr>
            @foreach ($allstaff as $staff  )
            <tr>
            <td>{{$staff['name']}}</td>
            <td>{{$staff['address']}}</td>
            <td>{{ $staff->phone }}</td>
            <td>{{ $staff->date }}</td>
            <td>{{ $staff->item }}</td>
            <td>{{ $staff->quantity }}</td>
            <td>{{ $staff->cost }}</td>
            <td>{{ $staff['total'] }}</td>


            </tr>
                
            @endforeach
            
        </table>
     
     
    </div>
  </div>