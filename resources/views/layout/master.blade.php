<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="col-md-3">
        <a class="navbar-brand" href="#"><i class="fab fa-angrycreative fa-4x"></i></a>
        <span class="text-muted">Site Slogan</span>
    </div>
    <div class="col-md-7">
        <form class="row">
            <div class="col-md-8">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-md-4">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
        </form>
    </div>
    <div class="col-md-2">
        <img src="https://www.overleaf.com/assets/logos/overleaf_og_logo.png" alt=""
             class="img-thumbnail rounded-circle w-25 mr-2 float-left">
        <div class="mt-3">
            <strong>Admin</strong>
            <a href="#">(Logout)</a>
        </div>
    </div>
</nav>
<div class="container-fluid row mt-2">
    <nav class="col-md-2">
        <div class="nav flex-column nav-pills">
            <a class="nav-link" href="/xe/product">Home</a>
            <a class="nav-link{{$currentPage=='product-list'?' active':''}}" href="/xe/product">Product Manager</a>
            <a class="nav-link{{$currentPage=='category-list'?'active':''}}" href="/xe/category">Category Manager</a>
        </div>
    </nav>
    <main class="col-md-10">
        @section('content')
        @show
    </main>
</div>
</nav>
</body>
</html>