<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="/css/font-awesome.min.css">

@yield('style')

<body>
    <div class="app-container text-color-primary mt-3">
        <nav class="navbar-fixed-top d-flex justify-content-between">
            <div class="h5" onclick="goBack()">
                <i class="fa fa-chevron-left clickable"></i>
            </div>
            <div class="h5">Family Tree</div>
            <div></div>
        </nav>

        <div class="p-3 mt-5">@yield('page-content')</div>

    </div>
    <script src="/js/jquery.min.js" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    @yield('script')
    
</body>
</html>