<html>
    <head>
        <title> Sistem Informasi Perpustakaan </title>
        <link rel="stylesheet" href="css/judul.css">
    </head>
<body>
    <?php include 'master/menu.php'?>
    <h2> 
        <div class="judul"> 
           Daftar Buku 
        </div>
    </h2>
    <table border=1 cellpadding='4px' cellspacing='0px'>
        <tr bgcolor='yellow'>
            <td>No.</td>
            <td>Judul</td>
            <td>Pengarang</td>
            <td>Penerbit</td>
            <td>Fiksi</td>
            <td>Tahun Terbit</td>
            <td>Halaman</td>
            <td>Stock</td>
            <td colspan=2 align='center'>Action</td>
        </tr>

        <?php
            $connect = mysqli_connect("localhost", "jwd", "jwd123", "perpustakaan");
            $ambil = "select * from buku order by judul";
            $tampil = mysqli_query($connect, $ambil);

            $no=0;
            while($data=mysqli_fetch_array($tampil)) {
                $no++;
                if($data['fiksi']==0)
                    $value="Fiksi";
                else
                    $value="Non Fiksi";
    
                echo "<tr>
                    <td>$no.</td>
                    <td>$data[judul]</td>
                    <td>$data[pengarang]</td>
                    <td>$data[penerbit]</td>
                    <td>$value</td>
                    <td align='center'>$data[tahun_terbit]</td>
                    <td align='right'>$data[halaman]</td>
                    <td align='center'>$data[stock]</td>
                    <td> 
						<a href=\"javascript:void(0)\" 
							onClick=\"window.open('edit.php?id=$data[id]','','scrollbars=yes, menubar=no, resizable=yes, location=no, width=650, height=380, left=30, top=5 screenX=50, screenY=100')\">
							Edit
						</a> 
                    </td>
                    <td>
						<a href=\"aksi.php?p=delete&id=$data[id]\" onClick=\"return confirm ('Apakah Anda benar-benar akan menghapus data buku : \\n \\n $data[judul] \\n ') \"> 
							Delete 
						</a>
					</td>
                </tr>";
            }
        ?>
    </table>
</body>
</html>
