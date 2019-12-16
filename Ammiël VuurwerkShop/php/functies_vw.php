
<html>
<div class="container" align="center">
  <?php

/* product printen voor sier vw*/
  function sier(){
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $db_name="vuurwerk";
    
    $conn = new PDO("mysql:host=$servername; dbname=$db_name;", $username, $password,);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $siervw = "SELECT * FROM vuurwerk WHERE `categorie` = 'sier' ";
    $result = $conn -> query($siervw);
    echo"<div class='container' align='center'>";
    while($row = $result -> fetch()){
        echo"<div class='product'><br><br>";
        echo"<img height=200 src='$row[img]'>";
        echo $row['naam'] . "</img><br>";
        echo"artikel_ID:" . $row['art_id'] . "<br>";
        echo $row['euro']."<br>";
        
        echo"</div>";

    }
    echo"</div>";
}  
/* product printen voor knal vw*/
function knal(){
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $db_name="vuurwerk";
    
        $conn = new PDO("mysql:host=$servername; dbname=$db_name;", $username, $password,);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $knalvw = "SELECT * FROM vuurwerk WHERE `categorie` = 'knal' ";
        $result = $conn -> query($knalvw);
        echo"<div class='container' align='center'>";
        while($row = $result -> fetch()){
            echo"<div class='product'><br><br>";
            echo"<img height=200 src='$row[img]'>";
            echo $row['naam'] . "</img><br>";
            echo"artikel_ID:" . $row['art_id'] . "<br>";
            echo $row['euro']."<br>";
            echo"</div>";
    
        }
        echo"</div>";
    }  
/* product printen voor knal vw*/
function alle(){
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $db_name="vuurwerk";
    
        $conn = new PDO("mysql:host=$servername; dbname=$db_name;", $username, $password,);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $vw_alles = "SELECT * FROM vuurwerk";
        $result = $conn -> query($vw_alles);
        echo"<div class='container' align='center'>";
        while($row = $result -> fetch()){
            echo"<div class='product'><br><br>";
            echo"<img height=200 src='$row[img]'>";
            echo $row['naam'] . "</img><br>";
            echo"artikel_ID:" . $row['art_id'] . "<br>";
            echo $row['euro']."<br>";
            echo"</div>";
    
        }
    echo"</div>";
    }

?>
</div>
</html>