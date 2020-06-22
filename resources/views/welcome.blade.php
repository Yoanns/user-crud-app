<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - User CRUD App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="container">
                <div class="title m-b-md">
                    User CRUD App
                </div>
                
                <div class="content">
                    <a href="{{ route('users.index') }}">
                        <button class="btn btn-primary">Let's Start</button>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
