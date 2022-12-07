@extends('layouts.app');

@section('content')
<style>
  @media print {
    /* .container{
      visibilty: hidden;}
      .print-container, .print-container *{
        visibilty: visible;
      }
    } */
  }
  
  
  </style>
  <body id="body">
<div class="container" id="body11">
    
<div class="row">
<div class="col">
  <div class="col">
    <div class="card" >
      <div class="card-header"><div class="row g-2"><div class="col"><b>Today Sales </b> </div>
      <div class="col"> <input type="text" class="form-control" name="search" placeholder="Search Phone" aria-label="Last name"></div></div></div>
      <div class="card-body">
          <form method="POST" action='sendsales' id="details">
            @csrf
            <br>
          <div class="row g-3">
              <div class="col">
                <input type="date" required class="form-control" name='date' id="date" placeholder="Name" aria-label="First name">
              </div>
              <div class="col">
                <input type="text" required class="form-control" id='name' name="name" placeholder="Name" aria-label="Last name">
              </div>
              <div class="col">
                <input type="text" required class="form-control" id='address' name="address" placeholder="Address" aria-label="Last name">
              </div>
                <div class="col">
                  {{-- <select name='item' id='model' class="form-control" data-dependent="state">
                      
                  
                    <option value="T23">Select Model</option>
                    
                  
                 
</select> <br> --}}
<input type="text" id='phone' required class="form-control"  name="phone" placeholder='Phone Number'  value="" aria-label="Last name">

                  
                </div> 
              
            </div><br>
            <div class="row g-3">
              
             
              <div class="col">
                <select name='item' id='itemphone' class="form-control" data-dependent="state">
                    
                
                  <option value=''>Select Phone</option> 
                  @foreach ($allstocs as $stoc)
                  <option>{{ $stoc->product }}</option>
                  @endforeach

                </select>
              
              </div> 
              <div class="col">
                <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantiy" aria-label="Last name">
              </div>
              <div class="col">
                  <input type="text" class="form-control" id="price"  name="cost" placeholder="Cost" aria-label="Last name">
                </div>
                <div class="col">
                  <input type="text" class="form-control" id="total" name="tot" placeholder="Total" aria-label="Last name">
                </div>
              <button class="bg-primary add_sales" >Submit</button>
            </div>
 
      </div>
    </div>
  </div>
</div></div>
<br><br>
</div>
<div class="card print-container" id='print' >
      <div class="card-header"><div class="row g-2"><div class="col"><b id='reciept'>Reciept </b><button id='print1' ID>Print</button> </div>
      <div class="col"> <input type="text" class="form-control" id='datetop' name="search"  aria-label="Last name"></div></div></div>
      <div class="card-body">
<p>

<b id="cema">CEMA Communicaltions LTD<br>
6B New Markrt Road, Main Market<br>
Onitsha, Anambra State, Nigeria <br>
08032033837
</b>
</p>

<table class="table table-striped" id='print'>
 
  <thead>
    <tr>
      <th scope="col">#</th>
      <td scope="col"></td>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Name</th>
      <td id=''><h3><input type='text' id='rname' value= '' disabled /></h3></td>
      <td><h3><input type='text' id='raddress' value= '' disabled /></h3></td>
      <td><h3><input type='text' id='rphone' value= '' disabled /></h3></td>
    </tr>
    <tr>
      <th scope="row">Item</th>
      <td id='ritem'><h3><input type='text' id='ritem1' value= '6' disabled /></h3></td>
      <td></td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">Amount</th>
      <td colspan="2"><h3><input type='text' id='rcost' value= '3' disabled /></h3></td>
      <td>@twitter</td>
    </tr>
  </tbody>

</table>
</div>
  </div>
</div>

      <H1>Welcome to Cemacoms</H1>
</div>


@endsection

  </body>
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
$(document).on('change', '#name', function () {
  var name1= $('#name').val();
  $('#rname').val(name1);
  
});
$(document).on('change', '#address', function () {
  var name2= $('#address').val();
  $('#raddress').val(name2);
  
});
$(document).on('change', '#date', function () {
  var name6= $('#date').val();
  // alert(name6);
  $('#datetop').val(name6);
  
});
$(document).on('change', '#itemphone', function () {
  var name3= $('#itemphone').val();
  
  $('#ritem1').val(name3);
  
  
});
$(document).on('change', '#phone', function () {
  var name4= $('#phone').val();
  $('#rphone').val(name4);
 
});
$(document).on('change', '#price', function () {
  var name5= $('#price').val();
  $('#rcost').val(name5);
 
});
     $(document).on('change', '#itemphone', function () { 
      
      var phone11= $('#itemphone').val();
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
    
var reciept= $('#reciept').on('click', function(){
  let say1=document.getElementById('body11').innerHTML;
  var say2=document.getElementById('print-content');
  
  document.getElementById('body11').innerHTML=say2;
window.print();
document.getElementById('body11').innerHTML=say1;

  alert(say1);
});

    $(document).on('click', '#print1', function () { 
    
     
      });
     
      //submit actions
      $(document).on('click', '.add_sales', function (e) {
  e.preventDefault();




$.ajaxSetup ({
  headers:{
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$.ajax({
  type: "POST",
  url: "/sendsales",
  data: $('#details').serialize(),
  dataType: "datatype",
  success: function () {
    alert('sent succeful');
    $(this).html('');
  }
  
});
//Print functions
  let say1=document.getElementById('body11').innerHTML;
  var say2=document.getElementById('print-content');
  
  document.getElementById('body11').innerHTML=say2;
window.print();
document.getElementById('body11').innerHTML=say1;

  


alert('data saved');
$('#cost').val(" ");
$('#item').val(" ");
$('#quantity').val(" ");


 
});
// $.ajax({
//   type: "POST",
//   url: "/sendsales",
//   data: $('#details').serialize(),
//   dataType: "datatype",
//   success: function () {
//     alert('sent succeful')
//     $(this).html('');
//   }
  
// });
     
     });
        

  </script>