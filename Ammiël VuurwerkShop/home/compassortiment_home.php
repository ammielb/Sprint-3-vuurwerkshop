<!DOCTYPE HTML>
<html>
  
<title>Vuurwerk</title>

<head>
  
<link href="../css/vuurw_css.css" rel="stylesheet">
<link rel="icon" type="image/png" href="https://cdn.discordapp.com/attachments/646651183989260322/656472444952903700/icon.png">

</head>
<body>
<div class="header">
	<span style="font-size:35px;cursor:pointer;color:#494747;"onclick="openNav()" class="left">&#9776;</span>
	<span style="font-size:35px;cursor:pointer"onclick="openSearch()" class="right"></span>
	<a href="index.php"><img src="../img/Firework_Rocket.png" width="80" height="80" class="center"> </a>
</div>


<div id="bannerimage"></div>
<div id="sidenav" class="sidenav">
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" class="right">&times;</a>
   <a href="index.php">Home</a>
    <a href="knalvw_home.php">Knalvuurwerk</a>
    <a href="siervw_home.php">Siervuurwerk</a>
    <a href="compassortiment_home.php">Compleet assortiment</a>
</div> 

<h1 align="center">Complete Assortiment</h1>
<div class="container" align="center">
    <?php
      include '../php/functies_vw.php';
      cat('alle','');
?>
</div>
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
<div class="space">
  <footer>
        <div class="footer">
            <Center>Made By Ammiël Buijs</center>
        </div>
    </div>
  </footer>

