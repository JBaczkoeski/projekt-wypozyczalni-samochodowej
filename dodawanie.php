<?php
include 'common\bt.php';
include 'common\navbarA.php';
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
						<form method="post" action="crud.php">
							<div class="row justify-content-center text-center">
								<div class="mb-4 mt-4 col-3">
								  <label for="formFile" class="form-label">Zdjęcie samochodu</label>
								  <input class="form-control" type="file" name="zdjecie">
								</div>
							</div>
							<div class="row justify-content-center text-center">
								<div class="mb-4 col-3">
									<select class="form-select" name="prod" aria-label="Default select example">
									  <option selected disabled>Producent</option>
									  <option value="1">Rolls-Royce</option>
									  <option value="2">Ferrari</option>
									  <option value="3">Porsche</option>
									  <option value="4">Mercedes</option>
									  <option value="5">BMW</option>
									  <option value="6">Lamborghini</option>
									  <option value="7">Audi</option>
									</select>
								</div>
							</div>
							<div class="row justify-content-center text-center">
								<div class="mb-4 col-3">
									<input class="form-control" name="mod" placeholder="Model" type="text">
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
									<input class="form-control" name="moc" placeholder="Moc" type="number">
								</div>
							</div>
							<div class="row justify-content-center text-center">
								<div class="mb-4 col-3">
									<input class="form-control" name="rokprod" placeholder="rok pordukcji" type="date">
								</div>
							</div>
							<div class="row justify-content-center text-center">
								<div class="mb-4 col-3">
									<input class="form-control" name="cena" placeholder="Cena" type="number">
								</div>
							</div>
							<div class="row justify-content-center text-center">
								<div class="mb-4 col-3">
									<input href="dodawanie.php" class="btn btn-success bt-lg" type="submit">
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
include 'common\footer.php';

?>