<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Totomobile</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/createCar">Add Car</a>
            </li>
          </ul>
        </div>
    </nav>

    <h1 class="text-center">Liste des voitures : </h1>

    <section class="container">
        <div class="row">
        @foreach ($dbCars as $item)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">{{$item->name}}</h5>
                          <p class="card-text">{{$item->year}}</p>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
    </section>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
