
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

	<?php 
    include "koneksi.php";
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($cek,"select * from buku where judul_buku like '%".$cari."%'");				
	}else{
		$data = mysqli_query($cek,"select * from buku");		
	}
	
	while($d = mysqli_fetch_array($data)){
	?>
    <h1 class="text-center flow-monochrime mb-5">Hasil Pencarian anda</h1>
    <div class="d-flex justify-content-center">
        
        
    <div class="card" style="width: 18rem;">
  <img src="<?= $d["cover"] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $d["nama_penulis"]; ?></h5>
    <p class="card-text"><?= $d["tahun_terbit"]; ?></p>
    <a href="<?= $d["download"];  ?>" class="btn btn-primary">Download File</a>
  </div>
</div>
</div>
	
	<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>











