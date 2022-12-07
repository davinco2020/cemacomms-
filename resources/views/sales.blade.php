@extends('layouts.sapp')

  
  
@section('content')


<div class="container">
  <div class="row">
<div class="col-2">
 

        
      
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
      
     
    

   
    <div class="col-10">
      <div class="card">
        <div class="card-header"><div class="row g-2"><div class="col"><b>Today Sales </b> </div>
        <div class="col"> <input type="text" class="form-control" name="search" placeholder="Search Phone" aria-label="Last name"></div></div></div>
        <div class="card-body">
            <form method="POST" action='searchsales'>
              @csrf
              <br>
            <div class="row g-3">
                <div class="col">
                  <input type="text" required class="form-control" name='name' placeholder="Name" aria-label="First name">
                </div>
                <div class="col">
                  <input type="text" required class="form-control" name="address" placeholder="Address" aria-label="Last name">
                </div>
                <div class="col">
                  <select name='item' id='phone' class="form-control" data-dependent="state">
                      
                  
                    <option value=''>Select Phone</option> 
                    @foreach ($allstoc as $stoc)
                    <option>{{ $stoc->phone }}</option>
                    @endforeach

                  </select>
                
                </div> 
                  <div class="col">
                    {{-- <select name='item' id='model' class="form-control" data-dependent="state">
                        
                    
                      <option value="T23">Select Model</option>
                      
                    
                   
</select> <br> --}}
<input type="text" required class="form-control" name="date" placeholder=date"  value="" aria-label="Last name">

                    
                  </div> 
                
              </div><br>
              <div class="row g-3">
                
                <div class="col">
                  <input type="date" required class="form-control" name="date" placeholder=date" aria-label="Last name">
                </div>
                <div class="col">
                  <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantiy" aria-label="Last name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="price" name="cost" placeholder="Cost" aria-label="Last name">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" id="total" name="tot" placeholder="Total" aria-label="Last name">
                  </div>
                <button class="bg-primary">Submit</button>
              </div>
         
            </form>
        </div>
      </div>
    </div>

    </div>
  </div>
  <!-- today sales modal --->
  <div class="modal fade" id="todaysale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


  <!-- Sales Search modal --->
  <div class="modal fade" id="searchsale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <label for="phonemodel" class="form-label">Model</label>
                  <input type="text" required class="form-control" name="model" id="phonemodel">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
              </form>
        </div>
      </div>
    </div>
  </div>


@endsection
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
     $(document).on('change', '#phone', function () { 
      
      var phone1= $('#phone').val();
      alert(phone1);
        
       
      $.ajax({
        type: "GET",
        url: "/findproductname",
       
        data: phone1,
        dataType: "dataType",
        success: function (data) {
         dataType: "json"
          console.log(response.data1);
        },
        error:function(){
console.log('error plsss');
        }
      });

      
     });});
    //  let data = {
    //   'name': $('.name').val(),
    //   'address': $('.address').val(),
    //   'phone': $('.phone').val(),
    //   'name': $('.name').val(),
    //   'name': $('.name').val(),
    //   'name': $('.name').val(),

    //  }
// $.ajax({
// type: "get",
// url: "/stocksale",
// data: "data",
// dataType: "dataType",
// success: function (response) {
//   alert ('success');
  

//   });



</script>