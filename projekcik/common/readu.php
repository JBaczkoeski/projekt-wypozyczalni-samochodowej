<?php
include('dbconn.php');
//Pobranie danych auta//
$sql="SELECT * FROM offers LIMIT 4";
$results = $conn->query($sql);
$conn->close();
?>