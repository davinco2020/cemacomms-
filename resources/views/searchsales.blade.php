@extends('layouts.app')
@section('content')
welcome
<br><br>
<div class="col-12">
      <div class="card">
        <div class="card-header">
        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button> --}}
        <button class='btn btn-primary' data-bs-toggle="modal" data-bs-target="#staticBackdrop">Date</button>
        <button class='btn btn-primary' data-bs-target="#product" data-bs-toggle="modal" >Product</button>
        <button class='btn btn-primary' data-bs-target="#customer" data-bs-toggle="modal" >Customer</button>

        
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Supplier
</button>
       
        </div>

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
                
                
            </table>
         
         
        </div>
      </div>
    </div>

    </div>
  </div>
    {{-- Date Modal --}}
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Search Date</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method='post' action='/searchsale'>
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Beginning Date</label>
    <input type="date" class="form-control" name='datefrom' id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Choose accurate date</div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">End Date</label>
    <input type="date" class="form-control" name='dateto' id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      
    </div>
  </div>










{{-- PRODUCT MODAL --}}

<div class="modal fade" id="product" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="product">Search Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method='post' action='/searchsale'>
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Beginning Date</label>
    <input type="date" class="form-control" name='beginDate' id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Choose accurate date</div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">End Date</label>
    <input type="date" class="form-control" name='startDate' id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      
    </div>
  </div>








@endsection

<!-- Button trigger modal -->


<!--  Supplier Modal -->
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
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Search</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


{{-- Product Modal --}}
<div class="modal fade" id="product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Search</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method='post' action='/searchproduct'>
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Model</label>
    <div class="col">
                <select name='item' id='itemphone' class="form-control" data-dependent="state">
                    
                
                  <option value=''>Select Phone</option> 
                  @foreach ($allstocss as $stoc)
                  <option>{{ $stoc->product }}</option>
                  @endforeach

                </select>
              
              </div> 
    {{-- <input type="date" class="form-control" name='beginDate' id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
    <div id="emailHelp" class="form-text">Choose accurate date</div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">End Date</label>
    <input type="date" class="form-control" name='startDate' id="exampleInputPassword1">
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

{{-- CUstomer Search --}}
<div class="modal fade" id="customer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Customer Search</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method='post' action='/searchcust'>
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


{{-- JAvascript --}}
<script type="text/javascript" src="asset/jquery.js"></script>

<script type="text/javascript">
  $(document).ready(function(){



  });




</script>