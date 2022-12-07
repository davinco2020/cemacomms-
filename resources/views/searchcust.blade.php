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
                    <th>Action</th>



                </tr>
                @foreach ($customer as $sale  )
                <tr>
                {{-- <td>{{$sale['name']}}</td>
                <td>{{$sale['address']}}</td> --}}
                <td>{{ $sale->name }}</td>
                <td>{{ $sale->address }}</td>
                <td>{{ $sale->phone }}</td>
                <td>{{ $sale->date }}</td>
                <td>{{ $sale->item}}</td>
                <td>{{ $sale->quantity }}</td>
                <td>{{ $sale->cost }}</td>
                <td>{{ $sale->total }}</td>
<td>
  
  {{-- <a class="primary btn btn-primary" id="edith"  data-bs-target="#customer" data-bs-toggle="modal"  > Edith</a> --}}

  <button type="button" class="btn btn-primary but" data-bs-toggle="modal" id="{{ $sale->id }}" data-bs-target="#exampleModal">
    Delete
  </button>

</td>


                {{-- <td>{{ $sale['total'] }}</td> --}}


                </tr>
                    
                @endforeach
                
            </table>
         
         
        </div>
      </div>
    </div>

    </div>
  </div>

  <div class="modal fade" id="customer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Customer Search</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method='post' action=''>
          @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Customer Name</label>
      <input type="text" class="form-control" name='cname' id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Choose accurate date</div>
    </div>
    
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Customer Phone Number</label>
      <input type="text" class="form-control" name='cphone' id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>









<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



        <form>
          
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Address</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Date</label>
              <input type="date" class="form-control" id="exampleInputPassword1">
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Item</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          
          
         
           
          </div>
        </form>










        
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endsection

<script type="text/javascript" src="asset/jquery.js"></script>

<script type="text/javascript">
  $(document).ready(function(){

    $('.but').click(function (e) { 
      e.preventDefault();
      var set= this.id;
      
      $.ajax({
        type: "get",
        url: "/fetchcust/"+set,
         data: "data",
        dataType: "json",
        success: function (response) {
          alert('succes');
        }
      });
    });
fetchcust();

    function fetchcust(){

     
    }





  });</script>
