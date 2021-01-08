<!DOCTYPE html>
<html>
<head>
	<title>update Mahasiswa</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>

	<?php 
	require '../koneksi.php';
		
		$query = "SELECT * FROM mahasiswa where nim";
		$mahasiswa = mysqli_query($link, $query);
		$isi = mysqli_fetch_object($mahasiswa);

		if (isset($_POST['simpan'])) {
			$input_nim = $_POST['txtnim'];
			$input_nama = $_POST['txtnama'];
			$input_prodi = $_POST['txtprodi'];


			$query = "UPDATE mahasiswa SET nama_mahasiswa = '$input_nama' , prodi= '$input_prodi' WHERE nim=$input_nim";
			$result = mysqli_query($link, $query);
			
			if ($result) {
				header('location: index.php');
				
			}else{
				echo 'Gagal disimpan : '.mysqli_error($link);
			}
		}
		


	 ?>
	<div class="container">
		
		

		<form action="edit.php"method="post">
			<div class="form-group">
				<label for="">NIM</label>
				<input type="text" class="form-control" name="txtnim" value= "<?= $isi->nim ?>">
				
			</div>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtnama" value= "<?= $isi->nama_mahasiswa ?>">
				
			</div>
			<div class="form-group">
				<label for="">Prodi</label>
				<input type="text" class="form-control" name="txtprodi" value= "<?= $isi->prodi ?>">
				
			</div>
			<input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
			<a href="index.php" class="btn btn-dark">Batal</a>
	
		</form>

		</div>
		
			
		

</body>
</html>