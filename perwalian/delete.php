<?php
if (isset($_GET['id'])) {
	require '../koneksi.php';
	$input_id = $_GET['id'];

	$query = "DELETE FROM perwalian WHERE id='$input_id'";
	$result = mysqli_query($link, $query);


			if ($result) {
				header('location: index.php');
				
			}else{
				echo 'Gagal disimpan : '.mysqli_error($link);
			}
		} 




