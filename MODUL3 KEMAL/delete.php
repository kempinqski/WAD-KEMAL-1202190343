<?php

    include('config.php');

    $id_buku = $_GET['id'];

    $query = "DELETE FROM buku_table WHERE id_buku = '$id_buku'";
    $update = mysqli_query($conn, $query);

    header('Location: Kemal_Home.php');

?>