<?php
$host = "localhost";
$database = "dynasite";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return true;
} catch(PDOException $e){
    //If the connection fails it will display a message with the reason
    echo $sql . "<br>" . $e->getMessage();
}
?>