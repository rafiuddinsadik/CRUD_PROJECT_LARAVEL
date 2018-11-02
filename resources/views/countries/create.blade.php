<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Create Country</title>
</head>
<body>
<ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link" href="{{'/'}}">CRUD Project</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('countries.index')}}">Country</a>
    </li>
</ul>
<div class="jumbotron text-center">
    <h1><strong>Create Country List</strong></h1>
    <p>Here you can create a list of countries</p>
</div>
<div class="col-sm-6">
        <div class="container">
            <div class="panel panel-default">
                <h2 class="panel-title">New entry for a country</h2>
                <div class="panel-body">
                    <form action="{{route('countries.store')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Country Name:</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Country Name">
                        </div>
                        <div class="form-group">
                            <label>Country Code:</label>
                            <input type="text" class="form-control" name="code" placeholder="Enter Country Code">
                        </div>
                        <div class="form-group">
                            <label>Currency Code:</label>
                            <input type="text" class="form-control" name="ccode"  placeholder="Enter Currency Code">
                        </div>
                        <div class="form-group">
                            <label>Country Symbol:</label>
                            <input type="text" class="form-control" name="symbol" placeholder="Enter Country Symbol">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Create!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>