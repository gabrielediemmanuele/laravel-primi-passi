<!DOCTYPE html> <html lang="en"> <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<!-- Bootstrap  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
        @include('partials.navbar')
    </header>
    
    <div class="container mb-3">
        <h1>Features</h1>
        <div class="row g-3">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://pbs.twimg.com/profile_images/1163911054788833282/AcA2LnWL_400x400.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Laravel</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="{{ route('homepage') }}" class="btn btn-danger">Go Home</a>
                    </div>
                  </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://pbs.twimg.com/profile_images/1163911054788833282/AcA2LnWL_400x400.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">News</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="{{ route('news') }}" class="btn btn-danger">News</a>
                    </div>
                  </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://pbs.twimg.com/profile_images/1163911054788833282/AcA2LnWL_400x400.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Exercises</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="{{ route('exercises') }}" class="btn btn-danger">Exercises</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</body>

</html>