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
<div class="jumbotron text-center">
    <h1><strong>Update Details</strong></h1>
    <p>Here you edit values of a specific country</p>
</div>
<div class="col-sm-6">
        <div class="container">
            <div class="panel panel-default">
                <h2 class="panel-title">Update Details for a Country</h2>
                <div class="panel-body">
                    <form action="{{route('countries.update',['id' => $countries->id])}}" method="PATCH">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="form-group">
                            <label>Country Name:</label>
                            <input type="text" class="form-control" name="name_updated" value="{{$countries->name}}">
                        </div>
                        <div class="form-group">
                            <label>Country Code:</label>
                            <input type="text" class="form-control" name="code_updated" value="{{$countries->code}}" >
                        </div>
                        <div class="form-group">
                            <label>Currency Code:</label>
                            <input type="text" class="form-control" name="ccode_updated" value="{{$countries->currency_code}}">
                        </div>
                        <div class="form-group">
                            <label>Country Symbol:</label>
                            <input type="text" class="form-control" name="symbol_updated" value="{{$countries->country_symbol}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>