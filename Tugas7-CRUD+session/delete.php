<?php
session_start();
include"koneksi.php";

$sesi=$_GET['sesi'];

if($sesi=='user'){
	$id=$_GET['id'];
	
	$query=mysql_query("DELETE FROM user WHERE username='$id'");
	
	if($query){header('location:sadmin.php');}	
}else if($sesi=='tabel_penyakit'){
	$id=$_GET['id'];
	
	$query=mysql_query("DELETE FROM tabel_penyakit WHERE id_penyakit='$id'");
	if($query){header('location:sadmin.php');}	
}
?>