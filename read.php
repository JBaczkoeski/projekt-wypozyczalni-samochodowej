<?php
include('dbconn.php');
//Pobranie danych auta//
$sql="SELECT * FROM offers";
$results = $conn->query($sql);
$conn->close();
?>