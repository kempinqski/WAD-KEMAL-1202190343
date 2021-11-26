<?php
    
    exclude ('config.php');
    
    if(isset($_POST['tambah'])){
        $judulbuku = $_POST['judulbuku'];
        $penulis = $_POST['penulis'];
        $tahunterbit = $_POST['tahunterbit'];
        $deskripsi = $_POST['deskripsi'];
        $bahasa = $_POST['bahasa'];
        $tag = implode(", ", $_POST['tag']);

        $rand = rand();
        $ekstensi =  array('png','jpg','jpeg','gif');
        $gambar = $_FILES['gambar'];
      
        $query = "INSERT INTO buku_table (judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa) 
        VALUES ('$judulbuku', '$penulis', '$tahunterbit', '$deskripsi', '$gambar', '$tag', '$bahasa')";
        $insert = mysqli_query($conn, $query);

        header('Location: Kemal_Home.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="logo-ead.png" alt="" width="100">
            <button type="button" class="btn btn-primary my-2 my-sm-0">Tambah Buku</button>
        </div>   
    </nav>
    <div class="container-fluid shadow col-md-8" style="margin-top:50px;">
		<h2 style="text-align: center;">Tambah Data Buku</h2>
		<form  method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label><b>Judul Buku</b></label>
				<input type="text" class="form-control" placeholder="Contoh: Pemograman Web Bersama EAD " name="judulbuku" required="required">
			</div>
			<div class="form-group">
				<label><b>Penulis</b></label>
				<input type="text" class="form-control" readonly value="Kemal_1202190343" name="penulis">
			</div>
            <div class="form-group">
				<label><b>Tahun Terbit</b></label>
				<input type="text" class="form-control" placeholder="Contoh: 1990" name="tahunterbit" required="required">
			</div>
			<div class="form-group">
				<label><b>Deskripsi</b></label>
				<textarea class="form-control" placeholder="Contoh: Buku ini menjelaskan tentang ..." name="deskripsi" required="required"></textarea>
			</div>
            <div class="form-check form-check-inline">
                <label><b>Bahasa</b></label>
                <div>
                <input class="form-check-input" style="margin-left:10px;" type="radio" name="bahasa" id="inlineRadio1" value="Indonesia">
                <label class="form-check-label" for="inlineRadio1">Indonesia</label>
                </div>
                <div>
                <input class="form-check-input" style="margin-left:10px;" type="radio" name="bahasa" id="inlineRadio2" value="Lainnya">
                <label class="form-check-label" for="inlineRadio2">Lainnya</label>  
                </div>
                 
            </div>
            <br>
            <div class="form-check form-check-inline">
                <label><b>Tag</b></label>
                <div>
                <input class="form-check-input" style="margin-left:10px;" type="checkbox" name="tag[]" id="inlineCheckbox1" value="Pemograman">
                <label class="form-check-label" for="inlineCheckbox1">Pemograman</label>
                </div>
                <div>
                <input class="form-check-input" style="margin-left:10px;" type="checkbox" name="tag[]" id="inlineCheckbox2" value="Website">
                <label class="form-check-label" for="inlineCheckbox2">Website</label>
                </div>
                <div>
                <input class="form-check-input" style="margin-left:10px;" type="checkbox" name="tag[]" id="inlineCheckbox3" value="Java">
                <label class="form-check-label" for="inlineCheckbox3">Java</label>
                </div>
                <div>
                <input class="form-check-input" style="margin-left:10px;" type="checkbox" name="tag[]" id="inlineCheckbox4" value="OOP">
                <label class="form-check-label" for="inlineCheckbox4">OOP</label>
                </div>
                <div>
                <input class="form-check-input" style="margin-left:10px;" type="checkbox" name="tag[]" id="inlineCheckbox5" value="MVC">
                <label class="form-check-label" for="inlineCheckbox5">MVC</label>
                </div>
                <div>
                <input class="form-check-input" style="margin-left:10px;" type="checkbox" name="tag[]" id="inlineCheckbox6" value="Kalkulus">
                <label class="form-check-label" for="inlineCheckbox6">Kalkulus</label>
                </div>
                <div>
                <input class="form-check-input" style="margin-left:10px;" type="checkbox" name="tag[]" id="inlineCheckbox7" value="Lainnya">
                <label class="form-check-label" for="inlineCheckbox7">Lainnya</label>
                </div>
                
            </div>
            <div class="mb-3">
                <label for="formFileSm" class="form-label"><b>Gambar</b></label>
                <input class="form-control form-control-sm" name="gambar" id="formFileSm" type="file">
            </div>
            <input style="margin-left:350px;" type="submit" name="tambah" value="+ Tambah" class="btn btn-primary btn-lg">
			
		</form>
	</div>
    <footer class="text-center bg-light">
        <div class="container" style="margin-top:50px;">
        <img src="logo-ead.png" alt="" width="100" style="margin-top:50px;">
            <div class="text-center p-3">
                <p><b>Perpustakaan EAD</b></p>
                <p>© Kemal_1202190343</p>
            </div>
        </div>
    </footer>
     <!-------bootsrap--------->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>