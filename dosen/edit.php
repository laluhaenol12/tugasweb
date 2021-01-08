<!DOCTYPE html>
<html>
<head>
	<title>update Dosen</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>

	<?php 
require '../koneksi.php';
		
		$query = "SELECT * FROM dosen where nip";
		$dosen = mysqli_query($link, $query);
		$isi = mysqli_fetch_object($dosen);

		if (isset($_POST['simpan'])) {
			$input_nip = $_POST['txtnip'];
			$input_nama = $_POST['txtnama'];
			$input_alamat = $_POST['txtalamat'];


			$query = "UPDATE dosen SET nama_dosen = '$input_nama' , alamat= '$input_alamat' WHERE nip=$input_nip";
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
				<label for="">NIP</label>
				<input type="text" class="form-control" name="txtnip" value= "<?= $isi->nip ?>">
				
			</div>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtnama" value= "<?= $isi->Nama_dosen ?>">
				
			</div>
			<div class="form-group">
				<label for="">Alamat</label>
				<input type="text" class="form-control" name="txtalamat" value= "<?= $isi->Alamat ?>">
				
			</div>
			<input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
			<a href="index.php" class="btn btn-dark">Batal</a>
	
		</form>

		</div>
		
			
		

</body>
</html>