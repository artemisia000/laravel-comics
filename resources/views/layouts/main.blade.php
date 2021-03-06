<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href=" {{ asset('css/app.css')}} "> 
    <title>DC Comics</title>
</head>
<body>

    @include('partials.header');

    <main>
        @yield('main.content')
    </main>
    
    @include('partials.footer');
    

    <script src=" {{ asset('js/app.js')}} "></script>
</body>
</html>