<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono|Merienda:700&display=swap" rel="stylesheet">
    <link href="{{ asset('/css/form.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
        @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{Session::get('message')}}
        </div>
        @endif
    <main class="full-height-width">
        <div class="container">
            <div class="all-center">
                <h1>Home page</h1>
                <div>
                    <a href="/login">
                        <h3>Login Here</h3>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>