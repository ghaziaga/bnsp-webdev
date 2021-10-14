<?php
include '../koneksi.php';

$idbuku=$_POST['id'];
$judulbuku=$_POST['judul'];
$kategori=$_POST['kat'];
$pengarang=$_POST['pen'];
$penerbit=$_POST['per'];
$status="Tersedia";

If(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE tbbuku
		SET judulbuku='$judulbuku',kategori='$kategori',pengarang='$pengarang',penerbit='$penerbit' ,status='$status'
		WHERE idbuku='$idbuku'"
	);
	header("location:../index.php?p=buku");
}
?>