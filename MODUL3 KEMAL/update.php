<?php

    include ('config.php');  

    if(isset($_POST['simpan']));{
        $id_buku = $_POST['id'];
        $judulbuku = $_POST['judulbuku'];
        $penulis = $_POST['penulis'];
        $tahunterbit = $_POST['tahunterbit'];
        $deskripsi = $_POST['deskripsi'];
        $bahasa = $_POST['bahasa'];
        $tag = implode(", ", $_POST['tag']);

        $query = "UPDATE buku_table SET judul_buku='$judulbuku', penulis_buku = '$penulis', tahun_terbit='$tahunterbit',
        deskripsi= '$deskripsi', bahasa='$bahasa' tag='$tag' WHERE id_buku = '$id_buku'";
        $update = mysqli_query($conn, $query);

        
        header('Location: Kemal_Home.php');
            
    }
?>