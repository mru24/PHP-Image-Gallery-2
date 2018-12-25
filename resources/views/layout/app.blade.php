<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

  </head>
  <body>
    <div id="app">
      @include('includes.navbar')
      <div class="container">
        @include('includes.messages')
        @yield('content')
      </div>
    </div>
  </body>
  {{-- <script src="{{asset('js/app.js')}}" charset="utf-8"></script> --}}

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>
