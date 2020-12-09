<?php session_start(); include"koneksi.php";?>
<html>
	<head>
		<title>Super Admin</title>
		<!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/jumbotron.css" rel="stylesheet">
        <link rel="stylesheet" href="css/sign.css">
	</head>
<body>
	<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          </button>
          <a class="navbar-brand">Data Penyakit</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a>Home</a></li>
            <li class="active"><a href="#">Admin</a></li>
          </ul>

        </div><!-- /.nav-collapse -->
        </div>
      </div><!-- /.container -->

	<div class="container">
		<?PHP
		// apa bila login berhasil tampilkan Pesan 
		if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
			
			?>
				<h3>Selamat Datang</h3> 
				<p>Anda Login sebagai : <b><?php echo $_SESSION['username']; ?></b></p>
		      <a href="logout.php" class="btn btn-danger">Log Out</a>  

		<?php 
		$query2 = mysql_query("SELECT * FROM tabel_penyakit ORDER BY id_penyakit");

			if($_SESSION['level']=='super_admin'){ 
			
			$query = mysql_query("SELECT * FROM user ORDER BY username");

		?>
			<br />
		    <hr />
		    <label><h3>Daftar User</h3></label>
			<table class="table table-bordered table-striped table-condensed">
		    	<thead>
		         <tr>
		         	<th>Username</th>
		         	<th>Nama Admin</th>
		            <th>Level Admin</th>
		            <th>Action</th>
		         </tr>
		        </thead>
		        <tbody>
		<?php 
			while($data=mysql_fetch_array($query)){
				echo"
					<tr>
					<td>".$data['username']."</td>
					<td>".$data['nama']."</td>
					<td>".$data['level']."</td>
					<td>
					<a class='btn btn-success' href='edit_user.php?id=".$data['username']."'>Edit</a> 
					<a class='btn btn-danger' href='delete.php?sesi=user&id=".$data['username']."'>Hapus</a>
					</td>
					</tr>
				";
			}
		?>
		        </tbody>
		    </table>
		    <a href="tambah_user.php" class="btn btn-primary">Tambah User</a>

		    <!-- Daftar Penyakit -->
		    <hr />
		   <h3>Data Penyakit</h3>
			<table class="table table-bordered table-striped table-condensed">
		    	<thead>
		         <tr>
		         	<th>Nama Penyakit</th>
		            <th>Keterangan</th>
		            <th>Action</th>
		         </tr>
		        </thead>
		        <tbody>
		<?php 
			while($data=mysql_fetch_array($query2)){
				echo"
					<tr>
					<td>".$data['nama_penyakit']."</td>
					<td>".$data['keterangan']."</td>
					<td>
					<a class='btn btn-success' href='edit_penyakit.php?id=".$data['id_penyakit']."'>Edit</a>
					<a class='btn btn-danger' href='delete.php?sesi=tabel_penyakit&id=".$data['id_penyakit']."'>Hapus</a>
					</td>
					</tr>
				";
			}
		?>
		        </tbody>
		    </table>
		    <a href="tambah_penyakit.php" class="btn btn-primary">Tambah Penyakit</a>
		<?php }
		else if($_SESSION['level']=='admin'){
			?>
		    
		     <h3>Data Penyakit</h3>
			<table class="table table-bordered table-striped table-condensed">
		    	<thead>
		         <tr>
		         	<th>Nama Penyakit</th>
		            <th>Keterangan</th>
		            <th>Action</th>
		         </tr>
		        </thead>
		        <tbody>
		<?php 
			while($data=mysql_fetch_array($query2)){
				echo"
					<tr>
					<td>".$data['nama_penyakit']."</td>
					<td>".$data['keterangan']."</td>
					<td>
					<a class='btn btn-success' href='edit_kategori.php?id=".$data['id_penyakit']."'>Edit</a>
					<a class='btn btn-danger' href='delete.php?sesi=tabel_penyakit&id=".$data['id_penyakit']."'>Hapus</a>
					</td>
					</tr>
				";
			}
		?>
		        </tbody>
		    </table>
		    <a href="tambah_penyakit.php" class="btn btn-primary">Tambah Penyakit</a>
		<?php }
		else if($_SESSION['level']=='operator'){
			?>
		    

			<br />
		    <hr />
		    <label><h3>Daftar Penyakit</h3></label>
			<table class="table table-bordered table-striped table-condensed">
		    	<thead>
		         <tr>
		         	<th>Nama Penyakit</th>
		            <th>Keterangan</th>
		         </tr>
		        </thead>
		        <tbody>
		<?php 
			while($data=mysql_fetch_array($query2)){
				echo"
					<tr>
					<td>".$data['nama_penyakit']."</td>
					<td>".$data['keterangan']."</td>
					</tr>
				";
			}
		?>
		        </tbody>
		    </table>
		<?php
			}else{
				echo"Anda tidak berhak untuk melihat halaman ini -__-";	
			}
		} ?>

	</div>
</body>
</html

