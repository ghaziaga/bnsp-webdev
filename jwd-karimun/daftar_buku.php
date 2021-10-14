<html>

<head>
    <title>Web pertama Saya</title>
    <link rel="stylesheet" href="css/gaya.css">
</head>

<body>
    <?php
    include 'menu.php'
    ?>

    <div class="judul">
        Daftar Buku
    </div>
    <table border=1 cellpadding="2px">
        <tr bgcolor="yellow">
            <td>No. </td>
            <td>Judul </td>
            <td>Pengarang </td>
            <td>Penerbit </td>
            <td>Jenis </td>
            <td>Tahun Terbit</td>
            <td>Jumlah Halaman </td>
            <td>Stock </td>
            <td colspan=2>Eksekusi</td>
            </tr(>
            <?php
            $connect = mysqli_connect("localhost", "root", "", "perpustakaan");
            $tampil = "select * from buku";
            $hasil = mysqli_query($connect, $tampil);

            $no = 0;
            while ($data = mysqli_fetch_array($hasil)) {
                if ($data['fiksi'] == 0)
                    $jenis = "Fiksi";
                else
                    $jenis = "Non Fiksi";

                $no++;
                echo "<tr>
                        <td>$no.</td>
                        <td>$data[judul]</td>
                        <td>$data[pengarang]</td>
                        <td>$data[penerbit]</td>
                        <td>$jenis</td>
                        <td align='center'>$data[tahun_terbit]</td>
                        <td align='right'>$data[halaman]</td>
                        <td align='right'>$data[stock]</td>
                        <td> 
						    <a href=\"javascript:void(0)\" 
							    onClick=\"window.open('edit.php?id=$data[id]','','scrollbars=yes, menubar=no, resizable=yes, location=no, width=650, height=380, left=30, top=5 screenX=50, screenY=100')\">
							    Edit
						    </a> 
                        </td>
                        <td>
						<a href=\"aksi.php?a=delete&id=$data[id]\" onClick=\"return confirm ('Apakah Anda benar-benar akan menghapus data buku : \\n \\n $data[judul] \\n ') \"> 
							Delete 
						</a>
					</td>
                        
                    <tr>";
            }
            echo "</table>";
            ?>

</body>

</html>