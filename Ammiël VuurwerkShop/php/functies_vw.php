
<html>
<div class="container" align="center">
  <?php

/* product printen voor sier vw*/
  function cat($welk,$cat){
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $db_name="vuurwerk";
    
    $conn = new PDO("mysql:host=$servername; dbname=$db_name;", $username, $password,);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($welk == 'ander'){
        $sql = "SELECT * FROM vuurwerk WHERE `categorie` = '$cat' ";
        $result = $conn -> query($sql);

        echo"<div class='container' align='center'>";
        while($row = $result -> fetch()){
                 echo"<div class='product'><br><br>";
                 echo"<img height=200 src='$row[img]'>";
                 echo $row['naam'] . "</img><br>";
                 echo"artikel_ID:" . $row['art_id'] . "<br>";
                 echo $row['euro']."<br>";
                 echo"<button class='toevoegbutton'>Toevoegen</button>";
        
        echo"</div>";

    }
    echo"</div>";
}elseif($welk =='alle'){
    $sql = "SELECT * FROM vuurwerk";
    $result = $conn -> query($sql);

    echo"<div class='container' align='center'>";
    while($row = $result -> fetch()){
             echo"<div class='product'><br><br>";
             echo"<img height=200 src='$row[img]'>";
             echo $row['naam'] . "</img><br>";
             echo"artikel_ID:" . $row['art_id'] . "<br>";
             echo $row['euro']."<br>";
             echo"<button class='toevoegbutton'>Toevoegen</button>";
    
    echo"</div>";

}
echo"</div>";
}



}  

?>
</div>
</html>