<html>
    <head>
        <title> Sistem Informasi Perpustakaan </title>
        <link rel="stylesheet" href="css/judul.css">
    </head>
<body>
    <?php include 'master/menu.php'?>
    <h2> 
        <div class="judul"> 
           Tambah Buku 
        </div>
    </h2>
    <form method="post" action="aksi.php?p=tambah&a=tambah&b=edit">
        <table cellpadding='2px' cellspacing='4px'>
            <tr>
                <td align='right' bgcolor='yellow'> Judul Buku : </td>
                <td> <input type="text" name="jud"> </td>
            </tr>
            <tr>
                <td align='right' bgcolor='yellow'> Pengarang : </td>
                <td> <input type="text" name="peng"> </td>
            </tr>
            <tr>
                <td align='right' bgcolor='yellow'> Penerbit : </td>
                <td> <input type="text" name="pbit"> </td>
            </tr>
            <tr>
                <td align='right' bgcolor='yellow'> Fiksi/ Non Fiksi : </td>
                <td> 
                    <select name="fik">
                        <option value="" selected> - Pilih - </option>
                        <option value="0"> Fiksi </option>
                        <option value="1"> Non Fiksi </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align='right' bgcolor='yellow'> Tahun Terbit : </td>
                <td> <input type="text" name="thn_terbit"> </td>
            </tr>
            <tr>
                <td align='right' bgcolor='yellow'> Jumlah Halaman : </td>
                <td> <input type="text" name="jlh_hal"> </td>
            </tr>
            <tr>
                <td align='right' bgcolor='yellow'> Stock : </td>
                <td> <input type="text" name="st"> </td>
            </tr>
            <tr>
                <td>  </td>
                <td align='right'> <input type="submit" value="Save"> </td>
            </tr> 
        </table>
</body>
</html>


