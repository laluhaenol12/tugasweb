<!DOCTYPE html>
<html>
<head>
	<title>update Perwalian</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>

	<?php 
	require '../koneksi.php';
		
		$query = "SELECT * FROM perwalian where id";
		$perwalian = mysqli_query($link, $query);
		$isi = mysqli_fetch_object($perwalian);

		if (isset($_POST['simpan'])) {
			$input_id = $_POST['txtid'];
			$input_nip = $_POST['txtnip'];
			$input_nim = $_POST['txtnim'];


			$query = "UPDATE perwalian SET dosen_nip  = '$input_nip' , mahasiswa_nim= '$input_nim' WHERE id=$input_id";
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
				<label for="">ID</label>
				<input type="text" class="form-control" name="txtid" value= "<?= $isi->id ?>">
				
			</div>
			<div class="form-group">
				<label for="">NIP</label>
				<input type="text" class="form-control" name="txtnip" value= "<?= $isi->dosen_nip ?>">
				
			</div>
			<div class="form-group">
				<label for="">NIM</label>
				<input type="text" class="form-control" name="txtnim" value= "<?= $isi->mahasiswa_nim ?>">
				
			</div>
			<input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
			<a href="index.php" class="btn btn-dark">Batal</a>
	
		</form>

		</div>
		
			
		

</body>
</html>