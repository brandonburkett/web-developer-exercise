<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Web Developer Exercise</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- laravel mix --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="/">Home</a>
    </nav>

    <main role="main" class="container">
      <div class="jumbotron">
        <h1>Comment System</h1>
        <p class="lead">Feel free to edit anything within the project.</p>
      </div>

      {{-- @see /resources/js/app.js if you want to use Vue --}}
      <div class="vue">
        <hello-example></hello-example>
      </div>
    </main>

    {{-- laravel mix --}}
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
