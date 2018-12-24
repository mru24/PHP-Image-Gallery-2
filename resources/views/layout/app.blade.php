<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/app.css">
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
  <script src="js/app.js" charset="utf-8"></script>
</html>
