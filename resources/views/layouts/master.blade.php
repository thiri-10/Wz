<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.scss','resources/js/app.js'])
</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                @include('layouts.nav')
            </div>
            <div class="col-12 col-md-9">
                <div class="container">

                    @yield('content')
                </div>
                
            </div>
        </div>
    </section>

</body>
</html>