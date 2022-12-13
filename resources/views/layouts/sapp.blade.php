<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script> --}}

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
            <a class="nav-link active" aria-current="page" href="/newstock">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/sell">Sales</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/newstock">Stocks</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">New Stocks</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/staff">Staff</a>
          </li>
          
        
        </ul>
        
      </div>
    </div>
  </nav>
  <main class="container">
    @yield('content')
</main>
      
    </div>
</body>
</html>
