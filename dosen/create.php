<!DOCTYPE html>
<html>
<head>
	<title>DOSEN</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="alert alert-info text-center">Tambah Data</div>

		<?php 
		require '../koneksi.php';
		if (isset($_POST['simpan'])) {
			$input_nip = $_POST['textnip'];
			$input_nama = $_POST['textnama'];
			$input_alamat = $_POST['txtalamat'];

			$query = "INSERT INTO dosen VALUES('$input_nip', '$input_nama', $input_alamat')";
			$result = mysqli_query($link, $query);
			if ($result) {
				header('location: index.php');
				}else{
					echo 'Gagal disimpan : '.mysqli_error($link);
				}
				# code...
			}
			# code...
		

		 ?>
		 <form action=""method="post">
			<div class="form-group">
				<label for="">NIP</label>
				<input type="text" class="form-control" name="txtnip">
				
			</div>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtnama">
				
			</div>
			<div class="form-group">
				<label for="">Alamat</label>
				<input type="text" class="form-control" name="txtalamat">
				
			</div>
			<input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
			<a href="index.php" class="btn btn-dark">Batal</a>
	
		</form>
		
	</div>

</body>
</html>