<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel base e numeri</title>

    <script src="js/app.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/css/app.css">
  </head>

  <body>
    <div id="home">
      <div class="container">
        <div class="row">
          <div class="header">
            @include("header")
          </div>
        </div>
        <div class="row">
          <div class="content">
            @yield("content")
            @yield('contentDue')
          </div>
        </div>
        <div class="row">
          <div class="footer">
            @include("footer")
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
