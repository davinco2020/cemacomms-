@extends('layouts.sapp')
@extends('stocks')


 
  @section('content')
  <div class="container">

    <br><br>
    <div class="row">

    
  <div class="col-2">
    
      <h2>Welcome!</h2>
      <ul class="nav flex-column">
        <li class="nav-item">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateprice">
            Update Price
          </button>
        </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/newstock">New Stock</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/allstocks">Old Stocks</a>
          </li>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Search Supplier
          </button>
          
          {{-- <li class="nav-item">
            <a class="nav-link" href="/marketers" id="" data-bs-toggle="modal" data-bs-target="#searchstock">Search Stocks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/allstaff">Categories</a>
          </li> --}}
        </ul>
      
    </div> 



  
    <div class="col-10">
      <br><br>
      <div class="card">
     
        <h5 class="card-header">Stocks</h5>
        <div class="card-body">
            <form method="POST" id="details" action="/savestocks">
              @csrf
              <br><br>
              <div class="row">
                <div class="col">
                  <input type="text" name="supplier" id='supplier' placeholder="Supplier" class="form- form-control">

                </div>
              <div class="col">
                <input type="text" name="address" id="address" placeholder="Address" class="form-control">

              </div>
              <div class="col">
                <input type="text" name="phone" id="phone" placeholder="Phone" class="form-control">

              </div>
              <div class="col">
                <input type="text" name="product" id="model" placeholder="Model" class="form- form-control">

              </div>
              </div><br><br>
              <div class="row">
                
              <div class="col">
                <input type="text" name="quantity" id="quantity" placeholder="Quantity" class="form-control">

              </div>
              <div class="col">
                <input type="text" class="form-control cost" id="selling" name='sp' placeholder="Selling Price" aria-label="Last name">
               

              </div>
              <div class="col">
                <input type="text" name="cost" id="cost" placeholder="Cost Price" class="form-control">
              
              </div>
              <div class="col">
                <input type="text"  value="" class="form-control cost" id="total" name='total' placeholder="Total" aria-label="Last name">
              </div> 
              </div>
              <br>
             
             
                <br><br>
                <div class="row">
                  <div class='col'>
                    <input type="date" class="form-control tot" id="date" name="date"  placeholder="Date" aria-label="Last name">

                  </div>
                  <div class='col'>
                    <input type="text" value="" class="form-control cost" name='profit' id="profit" name='profit' placeholder="Profit" aria-label="Last name">

                  </div>
                  <div class="col">
                    <button class="bg-primary add_stock form-control">Submit</button>
                  </div>

                </div>
                 
         
            </form>
        </div>
      </div>
    </div>

    </div>
  </div>
    
</div>
</div>
@endsection

{{-- Update Price moDAL --}}
<div class="modal fade" id="updateprice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Price</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method='post' action='/updateprice' id="updateprice">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Beginning Date</label>
    
      <select name='supplier' id='itemphone' class="form-control" data-dependent="state">
          
      
        <option value=''>Select Phone</option> 
        @foreach ($allstocss as $stoc)
        <option>{{ $stoc->product }}</option>
        @endforeach

      </select>
    
    
    
    
    {{-- <input type="date" class="form-control" name='beginDate' id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
    <div id="emailHelp" class="form-text">Choose accurate date</div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input type="text" class="form-control" name='price' id="price" value='' id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">New Price</label>
    <input type="text" class="form-control" name='price' id="newprice" value='' id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    
  </div>
  
  <button type="submit" class="btn btn-primary" id='submitprice'>Update Price</button>
</form>
      </div>
      
    </div>
  </div>
</div>


<script type="text/javascript" src="asset/updatejq.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    
$("#cost, #quantity, #sell").keyup(function(){
     var total=0;
     var profit=0;
     
     var z = Number($('#selling').val());
     var x = Number($('#cost').val());
     var y= Number($('#quantity').val());
     total= x*y;
     profit = z-x;
     $('#profit').val(profit);
     $("#total").val(total);

  });

  $(document).on('click', '#submitprice', function (e) {
  e.preventDefault();
  alert('you clicked update');

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
var cost = $('#cost').val();
var item = $('#cost').val();
var quantity = $('#cost').val();




alert('data saved');
$('#cost').val(" ");
$('#item').val(" ");
$('#quantity').val(" ");
$('#total').val(" ");
$('#profit').val(" ");
$('#selling').val(" ");
$('#date').val(" ");
$('#supplier').val(" ");
$('#address').val(" ");
$('#model').val(" ");
$('#phone').val(" ");




 
});


  });


// update stock

$(document).on('change', '#itemphone', function () { 
      
      var phone11= $('#itemphone').val();
      alert(phone11);
      $.ajax({
        type: "GET",
        url: "/findproduct",
        data: {'id':phone11},
        success: function (data) {
         
          console.log('success');
          console.log(data)
          console.log(data.cost);
          $.each(data.cost, function (key, item) { 
             console.log(item.cost);
             $('#price').val(item.cost);
             $('#rcost').val(item.cost);
          });
        },
        error:function(){
console.log('error plsss');
        }
      });

      
     });






</script>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supplier Search</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method='post' action='/searchsupply'>
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Beginning Date</label>
    
      <select name='supplier' id='itemphone' class="form-control" data-dependent="state">
          
      
        <option value=''>Select Phone</option> 
        @foreach ($allstocss as $stoc)
        <option>{{ $stoc->supplier }}</option>
        @endforeach

      </select>
    
    
    
    
    {{-- <input type="date" class="form-control" name='beginDate' id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
    <div id="emailHelp" class="form-text">Choose accurate date</div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">End Date</label>
    <input type="date" class="form-control" name='startDate' id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Search</button>
</form>
      </div>
      
    </div>
  </div>
</div>

{{-- Update Price Modal --}}
