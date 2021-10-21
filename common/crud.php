<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="wypozyczalnia";
	
//zmienne w których są zapisane wartości z formularza//
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
	$sql="INSERT INTO `offers`(`producer_id`, `model`, `year_of_production`, `power`, `transsmision_id`, `fuel_id`, `number_of_seat`, `status`, `price`, `user_id`) 
	VALUES ('$prod','$mod','$rok','$moc','$skrzynia','$paliwo','$liczba',null,'$cena',null)";
	echo $sql;
	$conn = new mysqli($hostname, $username, $password, $dbname) or die('Brak połączenia z bazą danych');
//pobranie id ofety aby dodać je do zapytanie dodającego zdjęcie//
	if ($conn->query($sql) === TRUE) {
		$wyn = mysqli_insert_id($conn);
	}
//drugie zapytanie dodające zdjęcie//
	$sql="INSERT INTO `photos`(`id`, `offer_id`, `article_id`, `patch`) VALUES (null,'$wyn',null,'$zdj')";
		if ($conn->multi_query($sql) === TRUE) {
			echo "Udało się dodać nową ofertę :)";
		}
		else
		{
			echo "nie udało się dodać oferty";
		}

$conn->close();
?>