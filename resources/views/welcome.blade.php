<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>CRUD Project</title>
</head>
<body>
    <div class="jumbotron text-center">
        <h1><strong>CRUD Project</strong></h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header"><strong>COUNTRIES</strong></div>
                    <div class="card-body">Contains a country list along with some basic information about that country</div>
                    <div class="card-footer">Status : <span class="badge badge-success">Created</span><p></p><a href="{{route('countries.index')}}" class="btn btn-primary" role="button">Enter</a></div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header"><strong>LOCATIONS</strong></div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et pretium mauris.</div>
                    <div class="card-footer">Status : <span class="badge badge-danger">Not Created</span><p></p><a href="#" class="btn btn-primary disabled">Enter</a></div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header"><strong>CATEGORIES</strong></div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et pretium mauris.</div>
                    <div class="card-footer">Status : <span class="badge badge-danger">Not Created</span><p></p><a href="#" class="btn btn-primary disabled">Enter</a></div>
                </div>
            </div>
        </div>
    </div>
    <p style="padding: 5px"></p>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header"><strong>SPECIALISM</strong></div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et pretium mauris.</div>
                    <div class="card-footer">Status : <span class="badge badge-danger">Not Created</span><p></p><a href="#" class="btn btn-primary disabled">Enter</a></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header"><strong>JOB TYPES</strong></div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et pretium mauris.</div>
                    <div class="card-footer">Status : <span class="badge badge-danger">Not Created</span><p></p><a href="#" class="btn btn-primary disabled">Enter</a></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header"><strong>COMPANIES</strong></div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et pretium mauris.</div>
                    <div class="card-footer">Status : <span class="badge badge-danger">Not Created</span><p></p><a href="#" class="btn btn-primary disabled">Enter</a></div>
                </div>
            </div>
        </div>
    </div>
    <p style="padding: 5px"></p>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header"><strong>CANDIDATES</strong></div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et pretium mauris.</div>
                    <div class="card-footer">Status : <span class="badge badge-danger">Not Created</span><p></p><a href="#" class="btn btn-primary disabled">Enter</a></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header"><strong>PACKAGES</strong></div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et pretium mauris.</div>
                    <div class="card-footer">Status : <span class="badge badge-danger">Not Created</span><p></p><a href="#" class="btn btn-primary disabled">Enter</a></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>