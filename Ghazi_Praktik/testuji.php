<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
function tulispesan() {
  echo "Tanjung Balai Karimun";
}

tulispesan(); // call the function

/*
Blok
kode program yang akan diukur penggunaan memorinya
*/
$penggunaan_memory = memory_get_usage();
echo "<br>Program menggunakan memory sebesar $penggunaan_memory bytes ";


define("Ghazi", [
  "Laki-laki",
  "20 TTahun",
  "Indonesia"
]);
echo Ghazi[0];

?>


</body>
</html>