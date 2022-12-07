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
        <h5 class="card-header"><p>New Staff</p></h5>
        <div class="card-body">
            <form method="POST">
                @csrf
            <div class="row g-3">
                <div class="col">
                  <input type="text" required class="form-control" placeholder="Name" aria-label="First name">
                </div>
                <div class="col">
                  <input type="text" required class="form-control" placeholder="Address" aria-label="Last name">
                </div>
                <div class="col">
                    <input type="text" required class="form-control" placeholder="Phone" aria-label="Last name">
                  </div>
            </div><br>
            <div class="row g-3">
              <div class="col">
                
                <input type="text" required class="form-control" placeholder="State of Origin" aria-label="Last name">
              </div>
              <div class="col">
                <input type="text" required class="form-control" placeholder="Local Govt" aria-label="Last name">
              </div>
              <div class="col">
                  <input type="text" required class="form-control" placeholder="Village" aria-label="Last name">
                </div>
          </div>
              </div><br>
              <h5 class="card-header"><p>Family Background</p></h5>
              <div class="card-body">
              <div class="row g-3">
                <div class="col">
                  <input type="text" class="form-control" id="item" placeholder="Parent Address" aria-label="First name">
                </div>
                <div class="col">
                  <input type="text" class="form-control" id="qty" placeholder="Parents Phone" aria-label="Last name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="price" placeholder="Siblings Phone Number" aria-label="Last name">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" id="total" placeholder="Total" aria-label="Last name">
                  </div>
               
              </div>
         
           
              </div>
            <br><h5 class="card-header"><p>Academic Qualification</p></h5>
            <div class="card-body">
            <div class="row g-3">
              <div class="col">
                <input type="text" class="form-control" id="item" placeholder="Qualification" aria-label="First name">
              </div>
              <div class="col">
                <input type="text" class="form-control" id="qty" placeholder="School" aria-label="Last name">
              </div>
              <div class="col">
                  <input type="text" class="form-control" id="price" placeholder="Course of Study" aria-label="Last name">
                </div>
                <div class="col">
                  <input type="text" class="form-control" id="total"  placeholder="Year of Graduation" aria-label="Last name">
                </div>
              <button class="bg-primary">Submit</button>
            </div>
       
         
            </div>
            </div>
            </form>

    </div>
  </div>
    

@endsection