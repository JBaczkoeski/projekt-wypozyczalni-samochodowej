<?php
//Pobranie danych auta//
$sql="SELECT * FROM offers";
$results = $conn->query($sql);
//pobranie id auta//
$sql = "SELECT `id` FROM offers";
$rezultat = $conn->query($sql);
$row = mysqli_fetch_assoc($rezultat);
$wyn = $row['id'];
//pobranie zdjęcia auta//
$sql="SELECT * FROM `photos` WHERE offer_id= '$wyn'";
$zdjecie = $conn->query($sql);
$raw = mysqli_fetch_assoc($zdjecie);
$photo = $raw['patch'];
$conn->close();
?>