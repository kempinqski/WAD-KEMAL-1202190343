<?php
    
    if (!isset($_SESSION)) {
        session_start();
    }

    $conn = mysqli_connect("localhost", "root", "", "wad_modul4");

    if(!$conn) {
        echo "<script>
                alert('Failed Connect into Database')'
                </script>";
        
        die("connection failed." . mysqli_connect_error());
    }

?>
