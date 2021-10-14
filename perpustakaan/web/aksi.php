<?php

    $connect = mysqli_connect("localhost", "jwd", "jwd123", "perpustakaan");
    $q=$_GET['p'];

    if ($q=="tambah") {
        $a = $_GET['a'];
        $b = $_GET['b'];

        $judul = $_POST['jud'];
        $pengarang = $_POST['peng'];
        $penerbit = $_POST['pbit'];
        $fiksi = $_POST['fik'];
        $tahun_terbit = $_POST['thn_terbit'];
        $jumlah_halaman = $_POST['jlh_hal'];
        $stock = $_POST['st'];

        echo "Isi variabel a = $a<br>";
        echo "Isi variabel b = $b<br>";

        echo "Isi variabel judul = $judul<br>";
        echo "Isi variabel pengarang = $pengarang<br>";
        echo "Isi variabel penerbit = $penerbit<br>";
        echo "Isi variabel fiksi = $fiksi<br>";
        echo "Isi variabel tahun_terbit = $tahun_terbit<br>";
        echo "Isi variabel jumlah_halaman = $jumlah_halaman<br>";
        echo "Isi variabel stock = $stock<br>";
   
        $query = "insert into buku (judul, 
                    pengarang, 
                    penerbit, 
                    fiksi, 
                    tahun_terbit, 
                    halaman, 
                    stock) 
                values ('$judul', 
                    '$pengarang', 
                    '$penerbit', 
                    '$fiksi', 
                    '$tahun_terbit', 
                    '$jumlah_halaman', 
                    '$stock')";
        mysqli_query($connect, $query); 

        header('location:daftar_buku.php');
    }

    elseif ($q=="edit") {
        $query = "update buku set judul = '$_POST[jud]', 
                    pengarang   = '$_POST[peng]', 
                    penerbit    = '$_POST[pbit]', 
                    fiksi       = '$_POST[fik]', 
                    tahun_terbit= '$_POST[thn_terbit]', 
                    halaman     = '$_POST[jlh_hal]', 
                    stock       = '$_POST[st]'
                where id='$_POST[pass_id]'";
        mysqli_query($connect, $query); 

        header('location:edit_confirm.php?id='.$_POST[pass_id]);
    }

	elseif ($q=='delete') {
		$query = "delete from buku where id='$_GET[id]'";
        mysqli_query($connect, $query); 

  		header('location:daftar_buku.php');
	}
?>
