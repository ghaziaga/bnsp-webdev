<?php
    echo "Ini pengiriman dengan methode Get <br>";
    echo "a = $_GET[a] <br>";
    echo "b = $_GET[b] <br>";
    echo "c = $_GET[c] <br><br>";


    echo "Isian dari form tersebut adalah : <br>";   
    echo "Judul = $_POST[jud]<br>";
    echo "Pengarang = $_POST[peng]<br>";
    echo "Fiksi = $_POST[jenis]<br>";
    echo "Penerbit = $_POST[pbit]<br>";
    echo "Tahun Terbit  = $_POST[thn_terbit]<br>";
    echo "Jumlah Halaman  = $_POST[jlh_halaman]<br>";
    echo "Stock = $_POST[st]<br>";

    $connect = mysqli_connect("localhost", "root", "", "perpustakaan");

    if($_GET['a']=="tambah") {
        $query = "insert into buku (judul,
                pengarang, 
                penerbit,
                fiksi,
                tahun_terbit,
                halaman,
                stock)
            values ('$_POST[jud]',
                '$_POST[peng]',
                '$_POST[pbit]',
                '$_POST[jenis]',
                '$_POST[thn_terbit]',
                '$_POST[jlh_halaman]',
                '$_POST[st]')";
            mysqli_query($connect, $query);
            header ('location:daftar_buku.php');
    }            
    elseif ($_GET['a']=="edit") {
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

    elseif ($_GET['a']=="delete") {
		$query = "delete from buku where id='$_GET[id]'";
        mysqli_query($connect, $query); 
  		header('location:daftar_buku.php');
	}
?>
