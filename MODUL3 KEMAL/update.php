<?php

    include ('config.php');  

    $id_buku = $_GET['id'];
    $judul = $_POST['judulbuku'];
    $penulis = $_POST['penulis'];
    $tahunterbit = $_POST['tahunterbit'];
    $deskripsi = $_POST['deskripsi'];
    $bahasa = $_POST['bahasa'];
    $tag = implode(", ", $_POST['tag']);

    $query = "UPDATE buku_table SET judul_buku='$judul', penulis_buku='$penulis', 
            tahun_terbit='$tahun', deskripsi='$deskripsi', 
            tag='$tag', bahasa='$bahasa'
                WHERE id_buku='$id_buku'";

    echo var_dump($query);
    $update = mysqli_query($conn, $query);
    echo var_dump($update);

    if($update){
        header('Location: Kemal_Home.php');
    }else{
        echo "data gagal diupdate";
    }
    

    
?>