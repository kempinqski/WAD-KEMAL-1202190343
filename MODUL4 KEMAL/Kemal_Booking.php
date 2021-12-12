<?php

    session_start();
    

    include_once('config.php');
    
    function booking($request)
{

    global $conn;

    $user_id = $request['user_id'];
    $nama_tempat = $request['nama_tempat'];
    $lokasi = $request['lokasi'];
    $harga = $request['harga'];
    $tanggal_perjalanan = $request['tanggal_perjalanan'];

    $query = "SELECT * FROM bookings";
    $select = mysqli_query($conn, $query);

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color:#f0c67c;">
    
    <!---navbar---->
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color:#64c4db;">
        <div class="container">
            <h5>
                <a class="navbar-brand text-dark" href="">EAD Travel</a>
            </h5> 
            <ul class="navbar-nav font-weight-bold">
                <div class="dropdown" style="margin-top:10px;">
                    <p class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown 
                    </p>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </nav>

<?php
    while($show = mysqli_fetch_assoc($select)); {
?>

    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name Tempat</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Tanggal Perjalanan</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $show['nama_tempat']; ?></td>
                        <td><?= $show['lokasi']; ?></td>
                        <td><?= $show['tanggal']; ?></td>
                        <td><?= $show['harga']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
   
<?php
    }
?>

    <!----bootstrap---->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

    <!-----footer----->
    <footer  style="background-color:#64c4db; margin-top:105px;">
        <div class="container-fluid">
            <div class="text-center p-3">
                ©2021 Copyright:
                <a class="text-white" data-target="#myModal" data-toggle="modal" role="button">Rafie Kemal Makarim_1202190343</a>
                <div id="myModal" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Created By</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-left">
                            <p>Nama : Rafie Kemal Makarim</p>
                            <p>NIM  : 1202190343 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </footer>
</html>