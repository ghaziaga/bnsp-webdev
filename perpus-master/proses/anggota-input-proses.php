<?php
include '../koneksi.php';
$idanggota=$_POST['idanggota'];
$nama=$_POST['nama'];
$jeniskelamin=$_POST['jeniskelamin'];
$alamat=$_POST['alamat'];
$status="Tidak Meminjam";
	
if(isset($_POST['simpan'])){

	$sql = "INSERT INTO tbanggota VALUES ('$idanggota','$nama','$jeniskelamin','$alamat','$status')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=anggota");
}
?>