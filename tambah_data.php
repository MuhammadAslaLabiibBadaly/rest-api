<?php

// memanggil file koneksi
require_once('config/koneksi.php');

// $form_data=json_decode(file_get_contents("php://input")); //ambildata dari json

$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$gaji=$_POST['gaji'];

$query="INSERT INTO tb_pengurus VALUES ('$id','$nama','$alamat','$gender','$gaji')";
$result= mysqli_query($conn,$query);

$respon=array( //digunakan untuk pesan
			'response' => 200,
			'pesan' => 'data berhasil masuk'
);

echo json_encode($respon);

?>