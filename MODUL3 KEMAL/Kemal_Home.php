<?php
    include('config.php');
        $query = "SELECT * FROM buku_table";
        $select = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="logo-ead.png" alt="" width="100">
            <a type="button" class="btn btn-primary my-2 my-sm-0" href="Kemal_Tambahbuku.php">Tambah Buku</a>
        </div>   
    </nav>
    <div class="container text-center" style="margin-top: 150px;">
        <h3>Belum Ada Buku</h3>
        <hr class=" bg-primary">
        <h6>Silahkan Menambahkan Buku</h6>

        <?php
        while ($show = mysqli_fetch_assoc($select)) {
        ?>

        <div class="card" style="width: 18rem; text-align: left;">
            <img src="<?= $show['gambar']; ?>" width="35" height="40">
            <div class="card-body">
                <h5 class="card-title"><?= $show['judul_buku']; ?></h5>
                <p class="card-text"><?= $show['deskripsi']; ?></p>
                <a name="nampil" id="nampil" class="btn btn-primary" href="Kemal_Detailbuku.php?id=<?= $show['id_buku'] ?>" role="button">Tampilkan Lebih Lanjut</a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <footer class="text-center bg-light ">
        <div class="container">
        <img src="logo-ead.png" alt="" width="100" style="margin-top:50px;">
            <div class="text-center p-3">
                <p><b>Perpustakaan EAD</b></p>
                <p>© Kemal_1202190343</p>
            </div>
        </div>
    </footer>

</body>
</html>