<?php
session_start();
include"koneksi.php";
$id=$_GET['id'];
$data=mysql_fetch_array(mysql_query("SELECT * FROM tabel_penyakit WHERE id_penyakit='$id'"));
?>
		<!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/jumbotron.css" rel="stylesheet">
        <link rel="stylesheet" href="css/sign.css">
<div class="container">
<div class="row">
<div class="span2">
 <div class="span8">
 <h3>Edit Penyakit</h3>
<form method="post" action="">
	<label>Nama Penyakit</label>
    <input type="text" class="form-control" name="nama_penyakit" value="<?php echo $data['nama_penyakit']; ?>" />
    <label>Keterangan</label>
    <textarea name="keterangan" class="form-control"><?php echo $data['keterangan']; ?></textarea><br />
	<button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>
</div>
</div>
</div>

<?php
if($_POST){
	$id_penyakit=$data['id_penyakit'];
	$nama_penyakit=$_POST['nama_penyakit'];
	$keterangan=$_POST['keterangan'];
	
	$update=mysql_query("UPDATE tabel_penyakit SET nama_penyakit='$nama_penyakit',keterangan='$keterangan' WHERE id_penyakit='$id'");	

if($update){
	header('location:sadmin.php');
}else{
	echo mysql_error();
}

}

?>