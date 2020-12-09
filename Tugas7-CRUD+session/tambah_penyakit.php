<?php session_start(); include"koneksi.php";?>
<html>
<head><title>Tambah Penyakit</title>
	<!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/jumbotron.css" rel="stylesheet">
        <link rel="stylesheet" href="css/sign.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="span2">
 <div class="span8">
<?PHP
// apa bila login berhasil tampilkan Pesan 
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
	
	?>
	<h3>Tambah Penyakit</h3>
	<form method="POST" action="">
		<label>Id Penyakit</label>
        <input type="text" class="form-control" name="id_penyakit" placeholder="Id Penyakit">
    	<label>Nama Penyakit</label>
        <input type="text" class="form-control" name="nama_penyakit" placeholder="Nama Penyakit">
		<label>Keterangan</label>
		 <textarea class="form-control" name="keterangan" rows="3"></textarea>
		<button type="submit" class="btn btn-primary">Tambah</button>
		</form>

<?php } ?>
<?php 
if($_POST){
	
	$id_penyakit=$_POST['id_penyakit'];
	$nama_penyakit=$_POST['nama_penyakit'];
	$keterangan=($_POST['keterangan']);
	
	$insert=mysql_query("INSERT INTO tabel_penyakit (id_penyakit,nama_penyakit,keterangan) 
			VALUES ('$id_penyakit','$nama_penyakit','$keterangan')");
	
	if($insert){
		header('location:sadmin.php');
	}else{
		echo'ERROR'.mysql_error();
	}
}
?>
</div>
<div class="span2"></div>
</div>
</div>
</body>
</html

