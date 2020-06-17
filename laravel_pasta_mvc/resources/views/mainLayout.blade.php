<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel pasta mvc</title>

    <script src="js/app.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/css/app.css">
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="header">
          @include('header')
        </div>
      </div>
      <div class="row">
        <div class="content">
          @yield('content')
        </div>
      </div>
      <div class="row">
        <div class="footer">
          @include('footer')
        </div>
      </div>
    </div>
  </body>
</html>
