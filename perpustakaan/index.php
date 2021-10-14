<html>
    <head>
        <title> Sistem Informasi Perpustakaan </title>
        <link rel="stylesheet" href="css/judul.css">
    </head>
<body>
    <?php include 'master/menu.php'?>
    <h2> 
        <div class="judul"> 
            Ini adalah Aplikasi Sistem Informasi Perpustakaan 
        </div>
    </h2>

    <center>
        Aplikasi ini adalah menampilkan isi buku yang didalam Perpustakaan dimana ada data buku dan data peminjam dan menu aplikasi ini adalah :
    </center>

    <ol type='a'> Buku
        <li> Judol Buku </li>
        <li> Pengarang </li>
        <li> Penerbit </li>
        <li> Tahun Terbit </li>
        <li> Jumlah Halaman </li>
        <li> Stok </li>
    </ol>

    <ul>Peminjam</ul>
    <ul>Histori Peminjaman</ul>

    <?php
        $a=9;
        $b=3;
        $hasil=9*3;
        echo "Halooo.... ini adalah bahasa PHP <br>";
        echo "9 x 3 = $hasil";

        function operasi_math ($x, $y) {
           $jumlah = $x + $y;
           $kali = $x * $y;
           echo "penjumlahan $x dan $y = $jumlah <br>";
           echo "perkalian $x dan $y = $kali <br>";
           echo "<br>";
        }

        function permutasi($p) {
            $sum=1;
            for ($i=1; $i<=$p; $i++) {
                $sum = $sum * $i;
            }
            return $sum;
        }

        echo "<br><br>";
        operasi_math(7,5); 
        operasi_math(10,2);
        
        $hasil=permutasi(4);
        echo "<div class='judul'>
            Permutasi 4! = $hasil
        </div>";
    ?>
</body>
</html>
