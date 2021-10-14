<html>

<head>
    <title>Web pertama Saya</title>
    <link rel="stylesheet" href="css/gaya.css">
    <script>
        function validasi() {
            var judul = document.forms["form_buku"]["jud"].value;
            var pengarang = document.forms["form_buku"]["peng"].value;
            var penerbit = document.forms["form_buku"]["pbit"].value;
            var fiksi = document.forms["form_buku"]["jenis"].value;
            var tahun_terbit = document.forms["form_buku"]["thn_terbit"].value;
            var jlh_halaman = document.forms["form_buku"]["jlh_halaman"].value;
            var stock = document.forms["form_buku"]["st"].value;
            if (judul == "") {
                alert("Silahkan isi  Judul ...!!!");
                return false;
            } else if (pengarang == "") {
                alert("Silahkan isi  Pengarang ...!!!");
                return false;
            } else if (penerbit == "") {
                alert("Silahkan isi  Penerbit ...!!!");
                return false;
            } else if (penerbit == "") {
                alert("Silahkan isi  Penerbit ...!!!");
                return false;
            }
        }
    </script>
</head>

<body>
    <?php
    include 'menu.php'
    ?>
    <div class="judul">
        Tambah Buku
    </div>

    <form name="form_buku" method="post" onsubmit="validasi()" action="aksi.php?a=tambah&b=5&c=edit">
        <table cellpadding="5px" cellspacing="5px">
            <tr>
                <td align="right" bgcolor="#ffaaff"> Judul : </td>
                <td> <input type="text" name="jud"> </td>
            </tr>
            <tr>
                <td align="right" bgcolor="#ffaaff"> Pengarang : </td>
                <td><input type="text" name="peng"> </td>
            </tr>

            <tr>
                <td align="right" bgcolor="#ffaaff">Jenis : </td>
                <td>
                    <select name=jenis>
                        <option value="" selected> - Pilih - </option>
                        <option value="0"> Fiksi </option>
                        <option value="1"> Non Fiksi </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td align="right" bgcolor="#ffaaff"> Penerbit : </td>
                <td><input type="text" name="pbit"> </td>
            </tr>
            <tr>
                <td align="right" bgcolor="#ffaaff"> Tahun Terbit : </td>
                <td><input type="text" name="thn_terbit"> </td>
            </tr>
            <tr>
                <td align="right" bgcolor="#ffaaff"> Jumlah Halaman : </td>
                <td><input type="text" name="jlh_halaman"> </td>
            </tr>
            <tr>
                <td align="right" bgcolor="#ffaaff"> Stock : </td>
                <td><input type="text" name="st"> </td>
            </tr>
            <tr>
                <td> </td>
                <td align="right"> <input type="submit" value=Save> </td>
            </tr>
        </table>
    </form>

</body>

</html>