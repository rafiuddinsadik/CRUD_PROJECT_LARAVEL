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
    <div class="jumbotron text-center">
        <h1><strong>Country</strong></h1>
        <p>Here you can see the list of countries</p>
        <a href="/countries/create" class="btn btn-success" role="button">Add Country</a>
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
                            <th>Details</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($countries as $country)
                        <tr>
                            <td>{{$country->name}}</td>
                            <td><a href="{{route('countries.show',['id' => $country->id])}}" class="btn btn-info" role="button">Details</a></td>
                            <td><a href="{{route('countries.edit',['id' => $country->id])}}" class="btn btn-warning" role="button">Update</a></td>
                            <td>
                                <form action="{{route('countries.destroy',['id' => $country->id])}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>