<?php

include("../database/config.php");

$nama_gedung = $_POST['nama_gedung'];

$sql = "SELECT * FROM tbl_jadwal WHERE nama_gedung = '$nama_gedung'";
$result = array();
$query = mysqli_query($db, $sql);
 
while($row = mysqli_fetch_array($query)){
    array_push($result, array('nama_gedung' => $row['nama_gedung'], 'tanggal_pinjam' => $row['tanggal_pinjam'], 'waktu_pinjam' => $row['waktu_pinjam']
	));
}
echo json_encode(array("result" => $result));
?>



