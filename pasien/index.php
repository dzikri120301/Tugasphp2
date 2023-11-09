<!DOCTYPE html>
<html>
<head>
	<title>Klinik</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1 align="left">Klinik</h1>
		<p align="right"><a href="../index.php">Logout</a></p>
	</div>
	<br/>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>	
	<a class="tombol" href="inputmedis.php">Tambah Data Medis</a>
 
	<h3>Medis</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama Pasien</th>
			<th>Nama Dokter</th>
			<th>Poli</th>
			<th>Diagnosis</th>
			<th>Resep</th>
		</tr>
        <?php
        $no = 1;
        include_once ("koneksi.php");
        $result = mysqli_query($con, "SELECT * FROM medis 
        	INNER JOIN pasien ON medis.id = pasien.id_pasien
        	INNER JOIN dokter ON medis.id = dokter.id
        	INNER JOIN poli ON medis.id = poli.id
        	");
        ?>
		<?php 
		while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";	
            echo "<td>".$no++."</td>";
            echo "<td>".$user_data['nama_pasien']."</td>";   
            echo "<td>".$user_data['nama_dokter']."</td>";
            echo "<td>".$user_data['poli']."</td>";
            echo "<td>".$user_data['diagnosis']."</td>";   
            echo "<td>".$user_data['resep']."</td>";   
        }
        ?>
    </table>
    <br>
        <a class="tombol" href="inputpasien.php">Tambah Data Pasien</a>
 
	<h3>Data Pasien</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama Pasien</th>
			<th>Phone</th>
			<th>Alamat</th>
		</tr>
        <?php
        $no = 1;
        include_once ("koneksi.php");
        $result = mysqli_query($con, "SELECT * FROM pasien ORDER BY id_pasien ASC");
        ?>
		<?php 
		while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";	
            echo "<td>".$no++."</td>";
            echo "<td>".$user_data['nama_pasien']."</td>";
            echo "<td>".$user_data['phone']."</td>";
            echo "<td>".$user_data['alamat']."</td>";  
        }
        ?>
    </table>    
    <br>
        <a class="tombol" href="inputdokter.php">Tambah Data Dokter</a>
 
	<h3>Data Dokter</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama Dokter</th>
			<th>Email</th>
			<th>Poli</th>
		</tr>
        <?php
        $no = 1;
        include_once ("koneksi.php");
        $result = mysqli_query($con, "SELECT * FROM dokter 
        	INNER JOIN poli ON dokter.id = poli.id");
        ?>
		<?php 
		while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";	
            echo "<td>".$no++."</td>";
            echo "<td>".$user_data['nama_dokter']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['poli']."</td>";  
        }
        ?>
        </table><br>

        <a class="tombol" href="inputpoli.php">Tambah Data Poli</a>
        <h3>Data Poli</h3>

        <table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Poli</th>
			<th>Deskripsi</th>
		</tr>
        <?php
        $no = 1;
        include_once ("koneksi.php");
        $result = mysqli_query($con, "SELECT * FROM poli ORDER BY id ASC");
        ?>
		<?php 
		while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";	
            echo "<td>".$no++."</td>";
            echo "<td>".$user_data['poli']."</td>";
            echo "<td>".$user_data['deskripsi']."</td>";
        }
        ?>  
    </table>
</body>
</html>