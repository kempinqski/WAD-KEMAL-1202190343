<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    
    <link rel="stylesheet" type="text/css" href="./css/booking.css">
</head>

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">Booking </a>
                </li>
            </ul>
        </div>
    </nav>


    <?php
        $method_selected = '';
        $image_selected = '';
        $gedung1 = isset($_POST['card1']);
        $gedung2 = isset($_POST['card2']);
        $gedung3 = isset($_POST['card3']);
        $img_src = [
            "nusantara.jpg",
            "garuda.jpg",
            "gsg.jpg"
        ];

        if ($gedung1) {
            $method_selected = '
                <select class="custom-select" name="buildingtype" disabled>
                <option value="Nusantara Hall">Nusantara Hall</option>
                <input type="hidden" name="buildingtype" value="Nusantara Hall">
                </select>';
            $image_selected = $img_src[0];
        } else if ($gedung2){
            $method_selected = '
                <select class="custom-select" name="buildingtype" disabled>
                <option value="Garuda Hall">Garuda Hall</option>
                <input type="hidden" name="buildingtype" value="Garuda Hall">
                </select>';
            $image_selected = $img_src[1];
        } else if ($gedung3){
            $method_selected = '
                <select class="custom-select" name="buildingtype" disabled>
                <option value="Gedung Serba Guna">Gedung Serba Guna</option>
                <input type="hidden" name="buildingtype" value="Gedung Serba Guna">
                </select>';
            $image_selected = $img_src[2];

        } else  {
            $method_selected = '
                <select class="custom-select" name="buildingtype">
                <option value="Nusantara Hall">Nusantara Hall</option>
                <option value="Garuda Hall">Garuda Hall</option>
                <option value="Gedung Serba Guna">Gedung Serba Guna</option>
                </select>';
            $image_selected = $img_src[0];
        }
    ?>


    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
        <div class="container bg-dark">
        <p class="text-light text-center">Reserve your venue now! <br></p>
        </div>
        <div class="col-md-auto">
            <img src=<?=$image_selected?> alt="Preview Building" class="image-preview">
        </div>
            <div class="col-md-6">
                <form action="mybooking.php" method="post">
                    <div class="form-group">
                        Name
                        <input type="text" class="form-control" name="name" readonly value="Kemal_1202190343">
                    </div>
                    <div class="form-group">
                        Event Date
                        <input type="date" class="form-control" name="eventdate">
                    </div>
                    <div class="form-group">
                        Start Time 
                        <input type="time" class="form-control" name="starttime">
                    </div>
                    <div class="form-group">
                        Duration(hours)
                        <input type="number" class="form-control" name="duration" aria-describedby="dur_info" value=0>
                    </div>
                    <div class="form-group">
                        Building Type
                        <?=$method_selected?>
                    </div>
                    <div class="form-group">
                        Phone Number
                        <input type="number" class="form-control" name="phone_num">
                        <br>
                    <div class="form-group">
                        Add Service(s)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service[]" value="Catering"
                                >
                            Catering / $700
                            <br/>
                            <input class="form-check-input" type="checkbox" name="service[]" value="Decoration"
                                >
                            Decoration / $450
                            <br/>
                            <input class="form-check-input" type="checkbox" name="service[]" value="Sound System"
                                >
                            Sound System / $250
                            <br/>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="Book"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center text-lg-start">
        <div class="text-center p-3">
        Created by : Rafie Kemal Makarim_1202190343
        </div>
    </footer>
</body>

</html>