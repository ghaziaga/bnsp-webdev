<!-- vim:ts=4:sw=4:tw=250:fdm=marker:cin
-->
<html>
<head>
<title>Edit Data Buku</title>
</head>
<body>
	<?php
        $connect = mysqli_connect("localhost", "jwd", "jwd123", "perpustakaan");
		$ambil = "SELECT * FROM buku WHERE id ='$_GET[id]'";
		$edit = mysqli_query($connect, $ambil);
	?>

	Edit Data<br>
	<form method="post" action="aksi.php?p=edit">
		<table cellspacing='5px' cellpadding='2px'>
            
            <?php 
                while ($e=mysqli_fetch_array($edit)) { 
					$value=$e['fiksi'];
					if ($value==0)
                        $value="Fiksi";
					else
                        $value="Non Fiksi";

   			        echo "<tr>
    			        <td bgcolor='yellow' align='right'>Judul :</td>
				        <td> <input type='text' name='jud' value='$e[judul]' size='8'></td>
    		        </tr>
   			        <tr>
    			        <td bgcolor='yellow' align='right'>Pengarang :</td>
				        <td> <input type='text' name='peng' value='$e[pengarang]' size='20'></td>
    		        </tr>
   			        <tr>
    			        <td bgcolor='yellow' align='right'>Penerbit :</td>
				        <td> <input type='text' name='pbit' value='$e[penerbit]' size='40'></td>
    		        </tr>
    			        <td bgcolor='yellow' align='right'>Fiksi :</td>
				        <td> 
					        <select name='fik'>  
            			        <option value='$e[fiksi]' selected>$value</option>
            			        <option value='0' >Fiksi</option>
            			        <option value='1' >Non Fiksi</option>
					        </select>
				        </td>
    		        </tr>
   			        <tr>
    			        <td bgcolor='yellow' align='right'>Tahun Terbit :</td>
				        <td> <input type='text' name='thn_terbit' value='$e[tahun_terbit]' size='40'></td>
    		        </tr>
   			        <tr>
    			        <td bgcolor='yellow' align='right'>Halaman :</td>
				        <td> <input type='text' name='jlh_hal' value='$e[halaman]' size='40'></td>
    		        </tr>
   			        <tr>
    			        <td bgcolor='yellow' align='right'>Stock :</td>
				        <td> <input type='text' name='st' value='$e[stock]' size='40'></td>
    		        </tr>

   			        <tr>
    			        <td>&nbsp;</td>
				        <td align='right'> <input type='button' onclick='window.close()' value='Cancel'>
				        <td align='right'> <input type='submit' name='edit' value='Save'>
    		        </tr>

		            <input type='hidden' name='pass_id' value='$e[id]'>";
                }
            ?>
		</table>
	</form>
</body>
