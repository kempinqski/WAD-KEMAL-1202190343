<?php
    session();

    if(!$_SESSION['id']) {
        header("Location: Kemal_Login.php");
        exit();
    }

    include_once('config.php');

    if (isset($_POST['tambah'])) {
        tiket($_POST);
    }

    function tiket($request)
{

    global $conn;

    $user_id = $request['user_id'];
    $nama_tempat = $request['nama_tempat'];
    $lokasi = $request['lokasi'];
    $harga = $request['harga'];
    $tanggal_perjalanan = $request['tanggal_perjalanan'];
    

    $query = "INSERT INTO bookings VALUES ('', '$user_id', '$nama_tempat', '$lokasi', '$harga', '$tanggal_perjalanan')";
    mysqli_query($conn, $query);
    
    
    header("Location: Kemal_Index.php");
    exit();
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
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#64c4db;">
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
    

    <?php if(isset($_SESSION['message'])) : ?>
        <div class='alert alert-success alert-dismissible fade show fade in' role='alert'>
            <?= $_SESSION['message']; ?>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
    <?php
        unset($_SESSION['message']);
    endif;
    ?>

    <div class="container-fluid" style="margin-top:50px;">
        
        <div class="container position-relative " style="background-color:#abdbe3; height:150px; width:1115px;">
            <h1 class="position-absolute top-50 start-50 translate-middle">EAD Travel</h1>
        </div>
    </div>
    <div class="container" style="margin-top:10px;">
        <div class="card-group">
            <div class="card">
                <img src="raja.jpg" class="card-img-top" height="250px" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><b>Raja Ampat, Papua</b></h5>
                    <p class="card-text">Kepulauan Raja Ampat adalah kepulauan Indonesia di ujung barat laut Semenanjung Kepala Burung di Papua Barat. Terdiri dari ratusan pulau yang tertutup hutan, Raja Ampat dikenal dengan 
                        pantai dan terumbu karangnya yang kaya dengan kehidupan laut. Lukisan batu dan gua kuno berada di Pulau Misool, sedangkan cendrawasih merah hidup di Pulau Waigeo. Batanta dan Salawati adalah pulau-pulau utama lainnya di nusantara.
                    </p>
                    <hr>
                    <p><b>Rp. 7.000.000</b></p>
                </div>
                <div class="card-footer d-grid gap-2">
                    <button type="button" class="btn btn-primary btn-sm" data-target="#ModalPapua" data-toggle="modal"  role="button">Pesan Tiket</button>
                    <!-------modal-------->
                    <div id="ModalPapua" class="modal fade" role="dialog">
		                <div class="modal-dialog">
			                    <!-- konten modal-->
			                <div class="modal-content">
				            <!-- body modal -->
				                <div class="modal-body">
                                    <div class="container mt-3">
                                        <form action="" method="POST">
                                            <div class="form-group" >
                                                <input required type="hidden"  id="user_id" name="user_id" value="<?= $_SESSION['id']?>">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="nama_tempat" aria-describedby="nama_tempat" name="nama_tempat" value="Raja Ampat" hidden>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="lokasi" aria-describedby="lokasi" name="lokasi" value="Papua" hidden>
			                                </div>
                                            <div class="form-group">
				                                <label><b>Tanggal Perjalanan</b></label>
				                                <input required type="date" class="form-control" id="tanggal_perjalanan" name="tanggal_perjalanan" value="">
			                                </div>
                                            <div class="form-group">
                                                <input class="form-control" id="harga" aria-describedby="harga" name="harga" value="7000000" hidden>
                                            </div>  
                                            <div class="modal-footer">
					                            <button type="button" class="btn btn-default bg-light" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" id="tambah" name="tambah" role="button">Tambahkan</button>
				                            </div>    
                                        </form>
                                    </div>
				                </div>
			                </div>
		                </div>
	                </div>                    
	            </div>
            </div>
            <div class="card">
                <img src="bromo.jpg" class="card-img-top" height="250px" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><b>Gunung Bromo, Malang</b></h5>
             
                    <p class="card-text">Gunung Bromo adalah gunung berapi somma aktif dan bagian dari pegunungan Tengger, di Jawa Timur, Indonesia. Pada 2.329 meter itu bukan puncak tertinggi dari massif, tetapi yang paling terkenal.
                        Kawasan ini merupakan salah satu destinasi wisata yang paling banyak dikunjungi di Jawa Timur, dan gunung berapi ini termasuk dalam Taman Nasional Bromo Tengger Semeru.
                    </p>
                    <hr style="margin-top:40px;">
                    <p><b>Rp. 2.000.000</b></p>
                </div>
                <div class="card-footer d-grid gap-2">
                    <button type="button" class="btn btn-primary btn-sm" data-target="#ModalBromo" data-toggle="modal"  role="button">Pesan Tiket</button>
                    <!-------modal-------->
                    <div id="ModalBromo" class="modal fade" role="dialog">
		                <div class="modal-dialog">
			                    <!-- konten modal-->
			                <div class="modal-content">
				            <!-- body modal -->
				                <div class="modal-body">
                                    <div class="container mt-3">
                                        <form action="" method="POST">
                                            <div class="form-group" >
                                                <input required type="hidden"  id="user_id" name="user_id" value="<?= $_SESSION['id']?>">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="nama_tempat" aria-describedby="nama_tempat" name="nama_tempat" value="Gunung Bromo" hidden>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="lokasi" aria-describedby="lokasi" name="lokasi" value="Malang" hidden>
			                                </div>
                                            <div class="form-group">
				                                <label><b>Tanggal Perjalanan</b></label>
				                                <input required type="date" class="form-control" id="tanggal_perjalanan" name="tanggal_perjalanan" value="">
			                                </div>
                                            <div class="form-group">
                                                <input class="form-control" id="harga" aria-describedby="harga" name="harga" value="2000000" hidden>
                                            </div>  
                                            <div class="modal-footer">
					                            <button type="button" class="btn btn-default bg-light" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" id="tambah" name="tambah" role="button">Tambahkan</button>
				                            </div>    
                                        </form>
                                    </div>
				                </div>
			                </div>
		                </div>
	                </div>                    
	            </div>
            </div>
            <div class="card">
                <img src="lot.jpg" class="card-img-top" height="250px" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><b>Tanah Lot, Bali</b></h5>
                    <p class="card-text">Tanah Lot adalah formasi batuan di lepas pantai pulau Bali, Indonesia. Ini adalah rumah bagi kuil ziarah Hindu kuno Pura Tanah Lot, ikon wisata dan budaya yang populer untuk fotografi. Di sini ada dua pura yang terletak di atas 
                        batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu. Pura Tanah Lot ini merupakan bagian dari pura Dang Kahyangan.
                    </p>
                    <hr style="margin-top:40px;">
                    <p><b>Rp. 5.000.000</b></p>
                </div>
                <div class="card-footer d-grid gap-2">
                    <button type="button" class="btn btn-primary btn-sm" data-target="#ModalTanahLot" data-toggle="modal"  role="button">Pesan Tiket</button>
                    <!-------modal-------->
                    <div id="ModalTanahLot" class="modal fade" role="dialog">
		                <div class="modal-dialog">
			                    <!-- konten modal-->
			                <div class="modal-content">
				            <!-- body modal -->
				                <div class="modal-body">
                                    <div class="container mt-3">
                                        <form action="" method="POST">
                                            <div class="form-group" >
                                                <input required type="hidden"  id="user_id" name="user_id" value="<?= $_SESSION['id']?>">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="nama_tempat" aria-describedby="nama_tempat" name="nama_tempat" value="Tanah Lot" hidden>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="lokasi" aria-describedby="lokasi" name="lokasi" value="Bali" hidden>
			                                </div>
                                            <div class="form-group">
				                                <label><b>Tanggal Perjalanan</b></label>
				                                <input required type="date" class="form-control" id="tanggal_perjalanan" name="tanggal_perjalanan" value="">
			                                </div>
                                            <div class="form-group">
                                                <input class="form-control" id="harga" aria-describedby="harga" name="harga" value="5000000" hidden>
                                            </div>  
                                            <div class="modal-footer">
					                            <button type="button" class="btn btn-default bg-light" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" id="tambah" name="tambah" role="button">Tambahkan</button>
				                            </div>    
                                        </form>
                                    </div>
				                </div>
			                </div>
		                </div>
	                </div>                    
	            </div>
            </div>
        </div>
    </div>

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
                <a class="text-white" data-target="#myModal2" data-toggle="modal" role="button">Rafie Kemal Makarim_1202190343</a>
                <div id="myModal2" class="modal" tabindex="-1" role="dialog">
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