<!DOCTYPE html>
<html>
    <head>
<title>Computer Cool Tech</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%">
  <h3 class="w3-bar-item"><img src="gambar/tech.png" alt="Logo" width="38" height="38" class="center"></h3>
  <ul>
  <li><a href="index.php">Home</a></li>
</ul>
  <a href="artikel.php" class="w3-bar-item w3-button ">Artikel</a>
  <a href="event.php" class="w3-bar-item w3-button">Event</a>
  <a href="galeri.php" class="w3-bar-item w3-button active">Gallery Photo</a>
  <a href="klien.php" class="w3-bar-item w3-button">Klien Kami</a>
  
  <div class="w3-dropdown-hover">
    <button class="w3-button">Login <i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block">
    <a href="login.php" class="w3-bar-item w3-button">Sign In</a>
    <a href="regis.php" class="w3-bar-item w3-button">Sign Up</a>
    </div>
  </div>
</div>

<!-- Horizontal Navigaion Bar -->

<div style="margin-left:20%">

  <div class="w3-container w3-light-blue">
    <h1 class="center">COMPUTER COOL Tech</h1>
  </div>

<ul>
  <li><a href="profil.php">Profil</a></li>
  <li><a href="visi.php">Visi dan Misi</a></li>
  <li><a href="product.php">Product Kami</a></li>
  <li><a href="kontak.php">Kontak Kami</a></li>
  <li><a href="aboutus.php">About Us</a></li>
</ul>

<!-- Page Content -->
<div class="w3-container">
<h3>Gallery Photo</h3>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="gambar/artikel1.jpg" style="width:100%">
  <img class="mySlides" src="gambar/artikel2.jpg" style="width:100%">
  <img class="mySlides" src="gambar/rakitpc.jpg" style="width:100%">
  <img class="mySlides" src="gambar/workshop.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<!--JavaScript SlideShow-->
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</div>
      
</body>
</html>
