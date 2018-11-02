<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Countries</title>
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
    <h1><strong>Details Of A Specific Country</strong></h1>
    <p>Here you can see and edit a specific Country Details</p>
    <a href="{{route('countries.edit',['id' => $countries->id])}}" class="btn btn-outline-success btn-lg" role="button">Edit</a>
</div>
<div class="col-sm-12">
    <div class="container" align="center">
        <div class="panel panel-default">
            <h2 class="panel-title">List</h2>
            <div class="panel-body">
                <div class="container">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Country Code</th>
                            <th>Currency Code</th>
                            <th>Country Symbol</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$countries->name}}</td>
                            <td>{{$countries->code}}</td>
                            <td>{{$countries->currency_code}}</td>
                            <td>{{$countries->country_symbol}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>