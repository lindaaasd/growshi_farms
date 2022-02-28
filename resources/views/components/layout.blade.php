<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- FONT AWESOME --}}

    <script src="https://kit.fontawesome.com/6fef038bd7.js" crossorigin="anonymous"></script>

    {{-- CSS --}}

    <link rel="stylesheet" href='{{asset("css/app.css")}}'>

    {{-- JQUERY --}}

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Growshi Farms</title>
</head>
<body>

    <x-navbar/>
    
    {{$slot}}

    <x-footer/>

<script src="{{asset("js/app.js")}}"></script>


</body>
</html>