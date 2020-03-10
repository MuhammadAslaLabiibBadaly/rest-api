<?php

// memanggil file koneksi
require_once('config/koneksi.php');
// require_once('satpol.php');
// include('koneksi.php'); -sama seperti require

//mencari data ID tertentu
if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $query="SELECT * FROM tb_pengurus WHERE id='$id'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
 
    $data=array(
        'id'=>$row['id'],
        'nama'=>$row['nama'],
        'alamat'=>$row['alamat'],
        'gender'=>$row['gender'],
        'gaji'=>$row['gaji']
    );
 
    $hasil[]=$data;
 
    echo json_encode($hasil);
 
} else {

// ambil data dari database
$query="SELECT * FROM tb_pengurus";
$result= mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

do {
	$hasil[] =$row; //membuat array dengan nama hasil
}while ($row = mysqli_fetch_assoc($result));

// convert hasil ke dalam format json
echo json_encode($hasil);
}

?>