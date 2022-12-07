@extends('layouts.app')
<script type="text/javascript" src="asset/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    $("#price, #qty").keyup(function(){
       var total=0;
       var x = Number($('#price').val());
       var y= Number($('#qty').val());
       total= x*y;
       $("#total").val(total);

    });
    });

</script>
  
@section('content')

<div class="container">
  <div class="row">

    
      {{-- <h2>Welcome!</h2> --}}
      {{-- <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="modall" data-bs-target="#searchsale" aria-current="page" href="/sales">New Sales</a>
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
      </ul> --}}

      {{-- <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/sales">New Sales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/todaysales" id="" data-bs-toggle="modal" data-bs-target="#todaysale">Today Sales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/allsales">All Sales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/allstaff">Categories</a>
        </li>
      </ul>
      --}}
     
     
     
    </div>
    <div class="col-12">
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
                @foreach ($products as $sale  )
                <tr>
                {{-- <td>{{$sale['name']}}</td>
                <td>{{$sale['address']}}</td> --}}
                <td>{{ $sale->supplier }}</td>
                <td>{{ $sale->address }}</td>
                <td>{{ $sale->phone }}</td>
                <td>{{ $sale->date }}</td>
                <td>{{ $sale->product}}</td>
                <td>{{ $sale->quantity }}</td>
                <td>{{ $sale->cost }}</td>
                <td>{{ $sale->total }}</td>

                {{-- <td>{{ $sale['total'] }}</td> --}}


                </tr>
                    
                @endforeach
                
            </table>
         
         
        </div>
      </div>
    </div>

    </div>
  </div>
    

@endsection

