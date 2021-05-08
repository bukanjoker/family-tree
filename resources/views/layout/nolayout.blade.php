<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<link rel="stylesheet" href="/css/app.css?v=1.0">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="/css/font-awesome.min.css">

@yield('style')

<body>
    <div class="app-container text-color-primary p-3">

        <div class="p-3">@yield('page-content')</div>

    </div>

    <script src="/js/jquery.min.js" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    @yield('script')
    
</body>
</html>