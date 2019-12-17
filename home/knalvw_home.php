<!DOCTYPE HTML>
<html>
<link href="../css/vuurw_css.css" rel="stylesheet">
<title>Vuurwerk</title>
<head>
<div class="header">
	<span style="font-size:35px;cursor:pointer;color:rgba(53, 53, 54, 0.815);"onclick="openNav()" class="left">&#9776;</span>
	<span style="font-size:35px;cursor:pointer"onclick="openSearch()" class="right"></span>
	<a href="../index.php"><img src="../img/Firework_Rocket.png" width="80" height="80" class="center"> </a>
</div>
<div id="bannerimage"></div>

    <div id="sidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" class="right">&times;</a>
        <a href="knalvw_home.php">Knalvuurwerk</a>
        <a href="siervw_home.php">Siervuurwerk</a>
        <a href="compassortiment_home.php">Compleet assortiment</a>
    </div> 
</head>
<body>
<?php
include '../php/functies_vw.php';
knal();    
    ?>
</body>
<script>
function openNav() {
  document.getElementById("sidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}
function closeNav() {
  document.getElementById("sidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</script>
<div class="space">
  <footer>
        <div class="footer">
            <Center>Made By Ammiël Buijs</center>
        </div>
    </div>
  </footer>
</html>
</html>