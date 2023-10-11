<!DOCTYPE html> <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi</title>
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
        @include('partials.navbar')
    </header>
    <div class="container mt-2">
        <h1>Welcome to Laravel</h1>
        <h6 class="text-danger">Click logo and go to our website!</h6>
        <div><a href="https://laravel.com/"><img src="https://pbs.twimg.com/profile_images/1163911054788833282/AcA2LnWL_400x400.jpg" alt="Laravel Logo"></a></div>
        
    </div>
</body>

</html>