<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/mybooking.css">
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
                    <a class="nav-link" href="booking.php">Booking</a>
                </li>
            </ul>
        </div>
    </nav>


    <?php
        $book_num = rand();
        $name = $_POST['name'];
        $checkin = $_POST['eventdate'];
        $checkin_dsply = '';
        $duration = $_POST['duration'];
        $checkout = '';
        $buildingtype = $_POST['buildingtype'];
        $phone = $_POST['phone_num'];
        $total_price = 0;

        if(!empty($checkin)){
            $checkin_dsply = date('d/m/Y', strtotime($checkin));
            $checkout = date('d/m/Y', strtotime('+'.$duration.'hour', strtotime($checkin)));
        }


        if(isset($_GET['service'])){
            $service = $_GET['service'];
        }else{
            $service = NULL;
        }
        $catering = 700;
        $decoration = 450;
        $sound = 250;
        if($buildingtype == "Nusantara Hall"){
            $harga = 2000;
        } else if($buildingtype == "Garuda Hall"){
            $harga = 1000;
        } else {
            $harga = 500;
        }

    ?>

    
    <div class="container-fluid">
    <center><h4>Thank you Kemal_1202190343 for Reserving</h4></center>
    <center><h5>Please double check your reservation details</h5></center>
        <div class="row justify-content-center align-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Check-in</th>
                        <th scope="col">Check-out</th>
                        <th scope="col">Building Type</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Service</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?=$book_num?></th>
                        <td><?= $name?></td>
                        <td><?= $checkin_dsply?></td>
                        <td><?= $checkout?></td>
                        <td><?= $buildingtype?></td>
                        <td><?= $phone?></td>
                        <td>
                            <?php 
                            
                            if (is_null($service)){
                                echo "No Service";
                            }else{
                                echo "<ul>";
                                foreach($service as $serv){
                                    if($serv == "Catering"){
                                        $total_price = $total_price+$catering;
                                        echo "<li>".$serv."</li>";
                                    }else if($serv == "Decoration"){
                                        $total_price = $total_price+$decoration;
                                        echo "<li>".$serv."</li>";
                                    }else if($serv == "Sound System"){
                                        $total_price = $total_price+$sound;
                                        echo "<li>".$serv."</li>";
                                    }       
                                }
                            }
                            ?>
                        </td>
                        <td>$
                            <?php
                                echo ($harga*$duration)+$total_price
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <footer class="text-center text-lg-start fixed-bottom">
        <div class="text-center p-3">
        Created by : Rafie Kemal Makarim_1202190343
        </div>
        </footer>
</body>

</html>