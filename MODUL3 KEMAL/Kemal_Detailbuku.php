<?php
    
    include 'config.php';
        $id_buku = $_GET['id'];

        $query = "SELECT * FROM buku_table WHERE id_buku = $id_buku";
        $select = mysqli_query($conn, $query);
        $show = mysqli_fetch_assoc($select);
        $tag  = explode(', ', $show['tag']);



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
            <a type="button" class="btn btn-primary my-2 my-sm-0" href="Kemal_Tambahbuku.php">Tambah Buku</a>
        </div>   
    </nav>


    <div class="container-fluid shadow col-md-8" style="margin-top:50px;">
		<h2 style="text-align: center;">Detail Buku</h2>
        <hr>
		<div class="mb-3">
			<p><b>Judul :</b> <br>
            <?= $show['judul_buku']; ?></p>
		</div>
		<div class="mb-3">
            <p><b>Penulis :</b> <br>
            <?= $show['penulis_buku']; ?></p>
		</div>
        <div class="mb-3">
            <p><b>Tahun Terbit :</b> <br>
            <?= $show['tahun_terbit']; ?></p>
		</div>
		<div class="mb-3">
            <p><b>Deskripsi :</b> <br>
            <?= $show['deskripsi']; ?></p>
		</div>
        <div class="mb-3">
            <p><b>Bahasa :</b> <br>
            <?= $show['bahasa']; ?></p>
		</div>
        <div class="mb-3">
            <p><b>Tag :</b><br>
            <?= $show['tag']; ?></p>
		</div>
        <div style="margin-left:350px;"> 
            <a name="sunting" id="sunting" class="btn btn-primary" data-target="#myModal" data-toggle="modal"  role="button">Sunting</a>
            <a name="delete" id="delete" class="btn btn-danger" href="delete.php?id=<?= $show['id_buku'] ?>" role="button">Hapus</a>
        </div>
        
    </div>`
            <div id="myModal" class="modal fade" role="dialog">
		        <div class="modal-dialog">
			        <!-- konten modal-->
			        <div class="modal-content">
				    <!-- heading modal -->
				        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sunting</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
				        </div>
				        <!-- body modal -->
				        <div class="modal-body">
                            <div class="container mt-3">
                                <form action="update.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group" >
                                       <input type="hidden" name="id" value="<?= $show['id_buku'] ?>"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="judulbuku" class="form-label"><b>Judul Buku</b></label>
                                        <input type="text" class="form-control" aria-describedby="judulbuku" id="judulbuku" name="judulbuku" value="<?= $show['judul_buku']; ?>">
                                    </div>
                                    <div class="form-group">
				                        <label for="penulis" class="form-label"><b>Penulis</b></label>
				                        <input type="text" class="form-control"  readonly="true" aria-describedby="penulis" id="penulis" name="penulis" value="<?= $show['penulis_buku']; ?>">
			                        </div>
                                    <div class="form-group">
				                        <label for="tahunterbit" class="form-label"><b>Tahun Terbit</b></label>
				                        <input type="text" class="form-control" id="tahunterbit" aria-describedby="tahunterbit" name="tahunterbit" value="<?= $show['tahun_terbit']; ?>">
			                        </div>
                                    <div class="form-group">
				                        <label for="deskripsi" class="form-label"><b>Deskripsi</b></label>
				                        <textarea class="form-control" id="deskripsi" name="deskripsi"><?= $show['deskripsi']; ?></textarea>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label for="bahasa" class="form-label"><b>Bahasa</b></label>
                                        <div>
                                            <input class="form-check-input" style="margin-left:10px;" type="radio" name="bahasa" id="inlineRadio1" value="Indonesia" <?php if($show['bahasa']=='Indonesia') echo 'checked'?>>
                                            <label class="form-check-label" for="inlineRadio1">Indonesia</label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" style="margin-left:10px;" type="radio" name="bahasa" id="inlineRadio2" value="Lainnya" <?php if($show['bahasa']=='Lainnya') echo 'checked'?>>
                                            <label class="form-check-label" for="inlineRadio2">Lainnya</label>  
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <label for="tag" class="form-label"><b>Tag</b></label>
                                        <div>
                                            <input class="form-check-input" style="margin-left:15px;" type="checkbox" name="tag[]" id="inlineCheckbox1" value="Pemograman" <?php if (in_array("Pemograman", $tag)) echo "checked";?>>
                                            <label class="form-check-label" for="inlineCheckbox1">Pemograman</label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" style="margin-left:10px;" type="checkbox" name="tag[]" id="inlineCheckbox2" value="Website" <?php if (in_array("Website", $tag)) echo "checked";?>>
                                            <label class="form-check-label" for="inlineCheckbox2">Website</label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" style="margin-left:10px;" type="checkbox" name="tag[]" id="inlineCheckbox3" value="Java" <?php if (in_array("Java", $tag)) echo "checked";?>>
                                            <label class="form-check-label" for="inlineCheckbox3">Java</label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" style="margin-left:10px;" type="checkbox" name="tag[]" id="inlineCheckbox4" value="OOP" <?php if (in_array("OOP", $tag)) echo "checked";?>>
                                            <label class="form-check-label" for="inlineCheckbox4">OOP</label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" style="margin-left:10px;" type="checkbox" name="tag[]" id="inlineCheckbox5" value="MVC" <?php if (in_array("MVC", $tag)) echo "checked";?>>
                                            <label class="form-check-label" for="inlineCheckbox5">MVC</label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" style="margin-left:10px;" type="checkbox" name="tag[]" id="inlineCheckbox6" value="Kalkulus" <?php if (in_array("Kalkulus", $tag)) echo "checked";?>>
                                            <label class="form-check-label" for="inlineCheckbox6">Kalkulus</label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" style="margin-left:10px;" type="checkbox" name="tag[]" id="inlineCheckbox7" value="Lainnya" <?php if (in_array("Lainnya", $tag)) echo "checked";?>>
                                            <label class="form-check-label" for="inlineCheckbox7">Lainnya</label>
                                        </div>       
                                    </div>
                                    <!-- footer modal -->
				                    <div class="modal-footer">
					                    <button type="button" class="btn btn-default bg-light" data-dismiss="modal">Tutup</button>
                                        <a type="submit" value="simpan" name="simpan" id="simpan" class="btn btn-primary" href="update.php?id=<?= $show['id_buku'] ?>" role="button">Simpan Perubahan</a>
				                    </div>
                                </form>
                            </div>
				        </div>      
			        </div>
		        </div>
	        </div>
        </div>  
	
    
    <footer class="text-center bg-light">
        <div class="container">
        <img src="logo-ead.png" alt="" width="100" style="margin-top:50px;">
            <div class="text-center p-3">
                <p><b>Perpustakaan EAD</b></p>
                <p>© Kemal_1202190343</p>
            </div>
        </div>
    </footer>

    <!-------bootstrap---------->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>