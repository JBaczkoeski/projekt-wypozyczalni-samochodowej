<?php
include ('bt.php');
include ('navbarA.php');
include ('dbconn.php');

$zdj=$_POST['zdjecie'];
$skrzynia=$_POST['skrzynia'];
$paliwo=$_POST['paliwo'];
$liczba=$_POST['liczba'];
$rok=$_POST['rokprod'];

echo($zdj);
echo($skrzynia);
echo($paliwo);
echo($liczba);
echo($rok);
?>
<html>
<head>
    <meta charset="UTF-8">
	<title>Twój wymarzony samochód</title>
	<link rel="stylesheet" href="projekt.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="container col-12 text-white bg-gray mt-4">
				<div class="row">
					<div class="container col-12 mt-4 h2 text-center">
						Dodaj ofertę
					</div>
					<div class="container col-10 ">
						<form method="post">
							<div class="row justify-content-center text-center">
								<div class="mb-4 mt-4 col-3">
								  <label for="formFile" class="form-label">Zdjęcie samochodu</label>
								  <input class="form-control" type="file" name="zdjecie">
								</div>
							</div>
							<div class="row justify-content-center text-center">
								<div class="mb-4 col-3">
									<select class="form-select" name="skrzynia" aria-label="Default select example">
									  <option selected disabled>Skrzynia biegów</option>
									  <option value="2">Manualna</option>
									  <option value="1">Automatyczna</option>
									</select>
								</div>
							</div>
							<div class="row justify-content-center text-center">
								<div class="mb-4 col-3">
									<select class="form-select" name="paliwo" aria-label="Default select example">
									  <option selected disabled>Paliwo</option>
									  <option value="1">Benzyna</option>
									  <option value="2">Diesel</option>
									</select>
								</div>
							</div>
							<div class="row justify-content-center text-center">
								<div class="mb-4 col-3">
									<select class="form-select" name="liczba" aria-label="Default select example">
									  <option selected disabled>liczba osób</option>
									  <option value="2">2</option>
									  <option value="5">5</option>
									</select>
								</div>
							</div>
							<div class="row justify-content-center text-center">
								<div class="mb-4 col-3">
									<input class="form-control" name="rokprod" placeholder="rok pordukcji" type="number">
								</div>
							</div>
							<div class="row justify-content-center text-center">
								<div class="mb-4 col-3">
									<button class="btn btn-success bt-lg" type="submit">Dodaj</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
    </div>
</body>
</html>

<?php
include ('footer.php');

?>