<?php

    session_start();

    include_once('config.php');

    if (isset(['register'])) {
        registrasi($_POST);
    }

    function registrasi($request)
{
    
    global $conn;

    $nama = $request['nama'];
    $email = $request['email'];
    $nohp = $request['nohp'];
    $password = mysqli_real_escape_string($conn, $request['password']);
    $passwordConfirm = mysqli_real_escape_string($conn, $request['passwordConfirm']);

    $emailCek = "SELECT email FROM users WHERE email='$email'";
    $select = mysqli_query($conn, $emailCek);

    if (!mysqli_fetch_assoc($select)) {

        if ($password == $passwordConfirm) {

            $password = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users VALUES ('', '$nama', '$email', '$password', '$nohp')";
            mysqli_query($conn, $query);

            $_SESSION['registered'] = 'Berhasil Registrasi';

            header("Location: Kemal_Login.php");
            exit();
        }
    }

    $_SESSION['message'] = 'Email anda sudah pernah terdaftar!';

    header("Location: Kemal_Register.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body style="background-color:#f0c67c;">
    
    <!---navbar---->
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color:#64c4db;">
        <div class="container">
            <h5>
                <a class="navbar-brand text-dark" href="Kemal_Index.php">EAD Travel</a>
            </h5> 
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="">Registrasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Kemal_Login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php if(isset($_SESSION['message'])) : ?>
        <div class='alert alert-warning alert-dismissible fade show fade in' role='alert'>
            <?= $_SESSION['message']; ?>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
    <?php
        unset($_SESSION['message']);
    endif;
    ?>

    <!----Registrasi-------->
    <div class="container" style="margin-top: 50px;">
        <div class="d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="container">
                        <h4 class="card-title text-center mt-4 pb-2">Registrasi</h4>
                        <hr>
                        <div class="card-body pt-0">
                            <form action="" method="POST">
                                <div class="form-group">
				                    <label for="nama"><b>Nama</b></label>
				                    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" id="nama" name="nama" required="required">
                                </div>
                                <div class="form-group">
				                    <label for="email"><b>E-mail</b></label>
				                    <input type="email" class="form-control" placeholder="Masukkan Alamat E-mail" id="email" name="email" required="required">
                                </div>
                                <div class="form-group">
				                    <label for="no_hp"><b>No. Handphone</b></label>
				                    <input type="number" class="form-control" placeholder="Masukkan Nomor Handphone" id="nohp" name="nohp" required="required">
                                </div>
                                <div class="form-group">
				                    <label for="password"><b>Kata Sandi</b></label>
				                    <input type="password" class="form-control" placeholder="Kata Sandi Anda" id="password" name="password" required="required">
                                </div>
                                <div class="form-group">
				                    <label for="passwordConfirm"><b>Konfirmasi Kata Sandi</b></label>
				                    <input type="password" class="form-control" placeholder="Konfirmasi Kata Sandi Anda" id="passwordConfirm" name="passwordConfirm" required="required">
                                </div>
                                <div class="text-center pt-2">
				                    <button type="submit" class="btn btn-primary" name="register">Daftar</button>
				                    <p class="mt-3">Anda sudah punya akun? <a href="Kemal_Login.php" class="text-primary">Login</a></p> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

    <!-----footer----->
    <footer style="background-color:#64c4db; margin-top:50px; fixed-bottom">
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