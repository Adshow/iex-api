<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Company Search</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-5">

        <form  method="post" action="{{ route('search.form') }}" novalidate enctype="multipart/form-data">
        <h3 class="card-header text-center">Search Company</h3>
        <div class="form-group mb-3">
            <input type="text" placeholder="Company Name" id="name" class="form-control" name="name" required autofocus>
        </div>
            <div class="d-grid mt-3">
              <input type="submit" name="latest" value="Latest Price" class="btn btn-dark btn-block">
            </div>
            <div class="d-grid mt-3">
              <input type="submit" name="details" value="Details from Company" class="btn btn-dark btn-block">
            </div>
        </form>
    </div>
</body>

</html>