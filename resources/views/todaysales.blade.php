@extends('layouts.app')
@section('content')
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
                @foreach ($todaysales1 as $sale  ) --}}
                <tr>
                <td>{{$sale['name']}}</td>
                <td>{{$sale['address']}}</td>
                <td>{{ $sale->name }}</td>
                <td>{{ $sale->address }}</td>
                <td>{{ $sale->phone }}</td>
                <td>{{ $sale->date }}</td>
                <td>{{ $sale->item }}</td>
                <td>{{ $sale->quantity }}</td>
                <td>{{ $sale->cost }}</td>
                <td>{{ $sale->total }}</td>

                <td>{{ $sale['total'] }}</td>


                </tr>
                    
                @endforeach
                <h1> {{ $date }}</h1>
                
            </table>
         
         
        </div>
      </div>
    </div>

    </div>
  </div>
    

@endsection

