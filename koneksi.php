<?php
$koneksi = mysqli_connect('localhost','adminklinik','312010096','klinik_312010096');

if (mysqli_connect_errno()){

	echo "Koneksi database gagal : " . mysqli_connect_error();

}

?>
