<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User CRUD Application</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
            <div class="title m-b-md">
                    User CRUD App
                </div>
            @yield('main')
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    </body>
</html>