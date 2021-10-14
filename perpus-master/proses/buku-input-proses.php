<?php
include '../koneksi.php';

$idbuku=$_POST['id'];
$judulbuku=$_POST['judul'];
$kategori=$_POST['kat'];
$pengarang=$_POST['pen'];
$penerbit=$_POST['per'];
$status="Tersedia";
	
if(isset($_POST['simpan'])){

	$sql= "insert into tbbuku (idbuku,judulbuku,kategori,pengarang,penerbit,status) values ('$idbuku','$judulbuku', 
	'$kategori','$pengarang','$penerbit','$status')";

	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=buku");
}
?>