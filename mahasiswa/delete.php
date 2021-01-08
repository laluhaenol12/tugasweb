<?php
if (isset($_GET['nim'])) {
	require '../koneksi.php';
	$input_nim = $_GET['nim'];

	$query = "DELETE FROM mahasiswa WHERE nim='$input_nim'";
	$result = mysqli_query($link, $query);


			if ($result) {
				header('location: index.php');
				
			}else{
				echo 'Gagal disimpan : '.mysqli_error($link);
			}
		} 




