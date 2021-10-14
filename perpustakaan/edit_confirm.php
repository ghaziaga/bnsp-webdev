<html>

<head>
	<title>Edit Data Buku</title>
</head>

<body>
	<?php
	$connect = mysqli_connect("localhost", "root", "", "perpustakaan");
	$ambil = "SELECT * FROM buku WHERE id ='$_GET[id]'";
	$confirm = mysqli_query($connect, $ambil);
	?>

	Edit Data Buku Sukses...!!!<br>
	<form method="post" action="aksi.php?p=edit">
		<table cellspacing='5px' cellpadding='2px'>

			<?php
			while ($e = mysqli_fetch_array($confirm)) {
				$value = $e['fiksi'];
				if ($value == 0)
					$value = "Fiksi";
				else
					$value = "Non Fiksi";

				echo "<tr>
						<td bgcolor='yellow' align='right'>Judul :</td>
						<td>$e[judul]</td>
					</tr>
					<tr>
						<td bgcolor='yellow' align='right'>Pengarang :</td>
						<td>$e[pengarang]</td>
					</tr>
					<tr>
						<td bgcolor='yellow' align='right'>Penerbit :</td>
						<td>$e[penerbit]</td
					</tr>
						<td bgcolor='yellow' align='right'>Fiksi :</td>
						<td>$value</td>
					</tr>
					<tr>
						<td bgcolor='yellow' align='right'>Tahun Terbit :</td>
						<td>$e[tahun_terbit]</td>
					</tr>
					<tr>
						<td bgcolor='yellow' align='right'>Halaman :</td>
						<td>$e[halaman]</td>
					</tr>
					<tr>
						<td bgcolor='yellow' align='right'>Stock :</td>
						<td>$e[stock]</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td align='right'> <input type='button' onclick='window.close()' value='Close'>
					</tr>";
			}
			?>
		</table>
	</form>
</body>