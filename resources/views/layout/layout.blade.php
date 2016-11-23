<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        <link rel="stylesheet" href="{{ elixir('css/vendor.css') }}">
        <!-- Styles -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <div id="app">
            @include('partials.menu')
            @yield('hero')
    		@yield('content')
    		@include('partials.footer')
        </div>
        
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/vendor.js') }}"></script>

    </body>
</html>
