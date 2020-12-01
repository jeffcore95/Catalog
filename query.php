<?php
    require_once 'login.php';
    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error) {
        die("Fatal Error to fetch data from database.");
    }
?>

<?php  //Code snippet
    $query = "SELECT * FROM catalogs";
    $result = $conn->query($query);

    if(!$result){
        die("database access fail.");
    }else echo "catalogs access completed";
    
   
?>