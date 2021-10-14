<!DOCTYPE html>
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
            Selamat Datang di Perpustakaan Kami...!!!
        </div>

        dengan menggunakan HTML
        <h3 style="color:#55dd22; font:bold 22px arial">  Selain akan menggunakan CSS </h3>

        <p>Ini adalah Pragraf 1</p>
        <p align="right">Ini adalah Pragraf 2</p>
        <p align="center"> <u>Ini adalah Pragraf 3</u> </p>

        <table border=1>
            <tr bgcolor="#ddabc5f">
                <td>No.</td>
                <td align="center">Nama </td>
                <td align="center">Alamat </td>
                <td align="right">Phone </td>
            </tr>

            <tr>
                <td>1.</td>
                <td>Andi Budimansyah</td>
                    <td>Jl. Diponegoro</td>
                <td>0123456789</td>
            </tr>
        </table>
        <br>
        <hr>
        H<sub>2</sub>SO<sub>4</sub>  <!-- ini adalah subscript -->

        <br><br>
        Nama Kendaraan
        <ul type="disc">
            <li>Mobil</li>
            <li>Sepeda Motor</li>
            <li>Pesawat</li>
        </ul>  
        Merek Mobil
        <ol type="a">
            <li>Toyota</li>
            <li>BMW</li>
            <li>Mercedes</li>
        </ol>  
        <hr>
        <ul type="disc">
            <li> <a href="profil.php" target="_blank"> Profil </a> </li>
            <li> <a href="kontak_kami.php"> Kontak Kami </a> </li>
            <li> <a href="https://www.facebook.com" target="_blank"> fb </a> </li>
        </ul>
        
        <br><br><br>
        <br><br><br>
    </body>
</html>

