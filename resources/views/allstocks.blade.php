@extends('layouts.sapp')
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="">
        <div class="row">
      
          <div class="col-2">
            <h2>Welcome!</h2>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/newstock">New Stock</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/allstocks">Old Stocks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/marketers" id="" data-bs-toggle="modal" data-bs-target="#searchstock">Search Stocks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/allstaff">Categories</a>
              </li>
            </ul>
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
                      <th>Model</th>

                      <th>Date </th>
                      
                      <th>Quantity</th>
                      <th>Cost</th>
                      <th>Total</th>
  
  
                  </tr>
                  @foreach ($allstock as $sale  )
                  <tr>
                  <td>{{$sale['supplier']}}</td>
                  <td>{{$sale['address']}}</td>
                  <td>{{ $sale->phone }}</td>
                  <td>{{ $sale->product}}</td>
                  <td>{{ $sale->date }}</td>
                  <td>{{ $sale->quantity }}</td>
                  <td>{{ $sale->cost }}</td>
                  <td>{{ $sale['total'] }}</td>
  
  
                  </tr>
                      
                  @endforeach
                  
              </table>
           
           
          </div>
        </div>
      </div>
  
      </div>
    </div>
      
  <!-- today sales model -->
    <div class="modal fade" id="searchstock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action='/todaysales' method="POST">
                  @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Phone Type</label>
                      <input type="text" class="form-control" name="item" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text"> Never share your username with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Date</label>
                      <input type="date" required class="form-control" name="date" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>
            </div>
          </div>
        </div>
      </div>


</body>
</html>
@endsection