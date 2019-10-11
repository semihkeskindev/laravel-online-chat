<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Chat</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
@yield('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
@yield('footer')
</body>
</html>