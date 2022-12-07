<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cema Communications') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style> </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#"><h1>Cema Communications Ltd</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/sell">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/searchsales" 
                {{-- data-bs-toggle="modal" data-bs-target="#staticBackdrop" --}}

                >Search Sales</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/allsales" id="allsale">All Sales</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">New Stocks</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/todaysales">Today Sales</a>
              </li>
            
            </ul>
            
          </div>
        </div>
      </nav>
         

        <main class="container">
            @yield('content')
        </main>
    </div>
    <!-- Button trigger modal -->
    <script type="text/javascript" src="asset/jquery.js"></script>
    <script>
     $(document).ready(function () {
       $('').click(function (e) { 
          e.preventDefault();
          $.ajax({
            type: "get",
            url: "/allsales",
            data: "data",
            dataType: "dataType",
            success: function (response) {
              
            }
          });
          console.log(response.data);
        });
      });
    </script>

<!-- Modal -->

</div>
</body>
</html>
