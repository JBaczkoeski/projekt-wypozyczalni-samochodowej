<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="wypozyczalnia";
$conn = new mysqli($hostname, $username, $password, $dbname) or die('Brak połączenia z bazą danych');

$zdj=$_POST['zdjecie'];
$skrzynia=$_POST['skrzynia'];
$paliwo=$_POST['paliwo'];
$liczba=$_POST['liczba'];
$rok=$_POST['rokprod'];
$cena=$_POST['cena'];
$moc=$_POST['moc'];
$prod=$_POST['prod'];
$mod=$_POST['mod'];
//pierwsze zapytanie dodające informacje o samochodzie//
$sql="INSERT INTO `offers`(`id`, `producer_id`, `model`, `year_of_production`, `power`, `transsmision_id`, `fuel_id`, `number_of_seat`, `status`, `price`, `user_id`) 
VALUES ('','$prod','$mod','$rok','$moc','$skrzynia','$paliwo','$liczba','','$cena','')";
//pobranie id ofety aby dodać je do zapytanie dodającego zdjęcie//
if ($conn->query($sql) === TRUE) {
    $wyn = mysqli_insert_id($conn);
}
//drugie zapytanie dodające zdjęcie//
$conn = new mysqli($hostname, $username, $password, $dbname) or die('Brak połączenia z bazą danych');
$sql="INSERT INTO `photos`(`id`, `offer_id`, `article_id`, `patch`) VALUES ('','$wyn','','$zdj')";
$conn=$conn->query($sql);

$conn = new mysqli($hostname, $username, $password, $dbname);
mysqli_close($conn);
?>