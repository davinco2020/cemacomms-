@extends('layouts.sapp')
@extends('stocks')


 
  @section('set')
  <div class="col-2">
    @section('navi')
      <h2>Welcome!</h2>
      <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/newstock">New Stock</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/allstocks">Old Stocks</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="/marketers" id="" data-bs-toggle="modal" data-bs-target="#searchstock">Search Stocks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/allstaff">Categories</a>
          </li> --}}
        </ul>
        @endsection
    </div> 
 @yield('navi')

  @endsection
  
@section('content')

<div class="container">
  <div class="row">
    <div class="col-2">
@section('nav')
    
    @endsection</div>
  
    <div class="col-10">
      <div class="card">
        <h5 class="card-header">Stocks</h5>
        <div class="card-body">
            <form method="POST" id="details" action="/savenewstock">
              @csrf
              <div class="row">
                <div class="col">
                  <input type="text" name="supplier" placeholder="supplier" class="form- form-control">

                </div>
              <div class="col">
                <input type="text" name="address" placeholder="address" class="form-control">

              </div>
              <div class="col">
                <input type="text" name="phone" placeholder="phone" class="form-control">

              </div>
              <div class="col">
                <input type="text" name="product" placeholder="Model" class="form- form-control">

              </div>
              </div><br>
              <div class="row">
                
              <div class="col">
                <input type="text" name="quantity" id="quantity" placeholder="quantity" class="form-control">

              </div>
              <div class="col">
                <input type="text" name="cost" id="cost" placeholder="cost" class="form-control">

              </div>
              <div class="col">
                <input type="text" class="form-control cost" id="total" name='total' placeholder="Total" aria-label="Last name">
              </div>
              <div class="col">
                <input type="date" class="form-control tot" id="date" name="date"  placeholder="Date" aria-label="Last name">
              </div> 
              </div>
              <br>
             
              {{-- <div class="row g-3">
                <div class="col">
                  <input type="text" required class="form-control supplier" id="supply" name='supplier' placeholder="Supplier" aria-label="First name">
                </div>
                <div class="col">
                  <input type="text" required class="form-control address" name='address' placeholder="Address" aria-label="Last name">
                </div>
                <div class="col">
                    <input type="text" required class="form-control phone" name='phone' placeholder="Phone" aria-label="Last name">
                  </div>
                  
                  <div class="col">
                    <input type="text" class="form-control model" id="item" name='item' placeholder="Model" aria-label="First name">
                  </div>
              </div><br>
              <div class="row g-3">
               
                <div class="col">
                  <input type="date" required class="form-control date" name='date' placeholder="date" aria-label="Last name">
                </div>
                <div class="col">
                  <input type="text" class="form-control qty" id="qty" name='qty' placeholder="Quantiy" aria-label="Last name">
                </div>
                <div class="col">
                    <input type="text" class="form-control cost" id="cost" name='cost' placeholder="Cost" aria-label="Last name">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control tot" id="total" name="total1"  placeholder="Total" aria-label="Last name">
                  </div> --}}
                
                <div class="row">
                  <div class="col">
                    <button class="bg-primary add_stock">Submit</button>
                  </div>

                </div>
                 
         
            </form>
        </div>
      </div>
    </div>

    </div>
  </div>
    

@endsection
<script type="text/javascript" src="asset/updatejq.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
$("#cost, #quantity").keyup(function(){
     var total=0;
     var x = Number($('#cost').val());
     var y= Number($('#quantity').val());
     total= x*y;
     $("#total").val(total);

  });


$(document).on('click', '.add_stock', function (e) {
  e.preventDefault();




$.ajaxSetup ({
  headers:{
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$.ajax({
  type: "POST",
  url: "/savestocks",
  data: $('#details').serialize(),
  dataType: "datatype",
  success: function () {
    alert('sent succeful');
    $(this).html('');
  }
  
});

alert('data saved');
$('#cost').val(" ");
$('#item').val(" ");
$('#quantity').val(" ");


 
});


  });


</script>