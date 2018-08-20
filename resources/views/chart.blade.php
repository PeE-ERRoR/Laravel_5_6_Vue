<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Laravel</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
  <a href=""></a>
  <div class="container" id="app">
    <coin-add-component></coin-add-component>
    <chart-component></chart-component>
  </div>

  <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
