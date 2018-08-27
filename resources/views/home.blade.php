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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="container" id="app">
    <div class="row">
      <div class="col-3 pb-3">
        <div class="card">
          <div class="card-header">
            Menu
          </div>
          <div class="card-body">
            <div class="list-group">
              <a href="/" class="list-group-item list-group-item-action list-group-item-info">Home</a>
              <a href="/chart" class="list-group-item list-group-item-action list-group-item-success">Chart</a>
              <a href="/datatable" class="list-group-item list-group-item-action list-group-item-info">Datatable</a>
              <a href="/content" class="list-group-item list-group-item-action list-group-item-success">Content</a>
              <a href="/event" class="list-group-item list-group-item-action list-group-item-info6">Event</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col pb-3">
        @yield('content')
      </div>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
