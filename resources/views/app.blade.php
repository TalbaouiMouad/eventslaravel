<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Events</title>
</head>
<body>
    <header >
        <nav class="navbar navbar-success sticky-top bg-success flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-light" href="#">3W Events</a>
       <input class="form-control form-control bg-light  rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
       <div class="navbar-nav">
        <div class=" nav-item text-nowrap">
            @auth 
            <div class="nav-link  text-light">
                <a class="btn btn-dark mx-2" href="/logout">Sign out</a>
               </div>
            @endauth
            @unless (Auth::check())
            <div class="nav-link  text-light">
             <a class="btn btn-success" href="/signin">Sign in</a>
            </div>
            @endunless
         
        </div>
       </div>
        </nav>
       
    </header>
    <main class="container-fluid ">
        @yield('content')
    </main>
     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>