<div class="container">
<div class="row">
<div class="col-2">
  @section('navi')
    <h2>Welcome!</h2>
    <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/newstocks">New Stock</a>
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
      @endsection
  </div> 
  <div class="col-10">
    
  </div>
</div>
</div>