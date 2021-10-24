<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/home.css">
</head>

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Booking</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php
        $img_src = [
            "nusantara.jpg",
            "garuda.jpg",
            "gsg.jpg"
        ];
    ?>

    <div class="container-fluid">
        <h2><b>WELCOME TO ESD VENUE RESERVATION</b></h2><br>
        <div class="container bg-dark">
        <p class="text-light">Find your best deal for your event, here!</p>
        </div>
        
        <form action="booking.php" method="post">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-auto">
                    <div class="card">
                        <img src=<?=$img_src[0]?> class="card-img-top" alt="" height="100%">
                        <div class="card-body text-center">
                        <h5 class="card-title text-left"><b>Nusantara Hall</b></h5>
            <p class="card-text  text-left">$2000 / Hour</p>
            <p class="text-left">5000 Capacity</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-success">Free Parking </li>
              <li class="list-group-item text-success">Full AC</li>
              <li class="list-group-item text-success">Cleaning Services</li>
              <li class="list-group-item text-success">Covid-19 Protocols</li>
            </ul>
            </div>
                    <div class="card-footer">
                        <button name="card1" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>

            <div class="col-md-auto">
                <div class="card">
                    <img src=<?=$img_src[1]?> class="card-img-top" alt="" height="100%">
                        <div class="card-body text-center">
                        <h5 class="card-title text-left"><b>Garuda Hall</b></h5>
            <p class="card-text  text-left">$1000 / Hour</p>
            <p class="text-left">2000 Capacity</p>

            <ul class="list-group list-group-flush">
              <li class="list-group-item text-success">Free Parking </li>
              <li class="list-group-item text-success">Full AC</li>
              <li class="list-group-item text-danger">No Cleaning Services</li>
              <li class="list-group-item text-success">Covid-19 Health Protocols</li>
            </ul>
            </div>
                        <div class="card-footer">
                            <button name="card2" class="btn btn-primary">Book Now</button>
                        </div>
                    </div>
                </div>

            <div class="col-md-auto">
                <div class="card">
                    <img src=<?=$img_src[2]?> class="card-img-top" alt="" height="100%">
                    <div class="card-body text-center">
                    <h5 class="card-title text-left"><b>Gedung Serba Guna</b></h5>
            <p class="card-text  text-left">$500 / Hour</p>
            <p class="text-left">500 Capacity</p>
            

                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-danger">No Free Parking</li>
                    <li class="list-group-item text-danger">No Full AC</li>
                    <li class="list-group-item text-danger">No Cleaning Services</li>
                    <li class="list-group-item text-success">Covid-19 Health Protocols</li>
                </ul>
            </div>
                        <div class="card-footer">
                            <button name="card3" class="btn btn-primary">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        <footer class="text-center text-lg-start">
        <div class="text-center p-3">
        Created by : Rafie Kemal Makarim_1202190343
        </div>
        </footer>
        </form>
    </div>
</body>

</html>