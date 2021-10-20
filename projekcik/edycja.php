<?php
include 'common\bt.php';
include 'common\navbarA.php';
include 'common\read.php';
?>
<html>
<head>
    <meta charset="UTF-8">
	<title>Twój wymarzony samochód</title>
	<link rel="stylesheet" href="common/projekt.css">
</head>
<body class="bg-gray">
	<div class="container-fluid bg-gray">
		<div class="row">
			<div class="container col-5 bg-gray pt-4">
				<img src="images/camaro.jpg" class="img-fluid border border-white border-5">
			</div>
			<div class="container col-7 bg-gray text-white pt-4">
				<div class="row">
					<div class="container col-8 text-white">
						<form method="post" action="">
							<?php
							foreach($results as $key => $wyn){
							echo"
							<div class='row justify-content-center text-center'>
								<div class='mb-4 col-5'>
								  <label for='formFile' class='form-label h3'>Zdjęcie samochodu</label>
								  <input class='form-control' type='file' id='formFile'>
								</div>
							</div>
							<div class='row'>
								<div class='container col-5 text-center mt-3'>
										<select class='form-select' name='prod' aria-label='Default select example'>
										<option selected disabled>Producent</option>
										<option value='1'>Rolls-Royce</option>
										<option value='2'>Ferrari</option>
										<option value='3'>Porsche</option>
										<option value='4'>Mercedes</option>
										<option value='5'>BMW</option>
										<option value='6'>Lamborghini</option>
										<option value='7'>Audi</option>
									</select>
								</div>
							</div>
							<div class='row'>
								<div class='container col-5 text-center mt-3 mb-4'>
									<label for='model' class='form-label h3 '>Model</label>
									<input type='text' class='form-control' id='model' value='{$wyn['model']}'>
								</div>
							<div>
							<div class='row justify-content-center text-center'>
								<div class='mb-4 col-5'>
								<label for='model' class='form-label h3 '>Skrzynia biegów</label>
									<select class='form-select' aria-label='Default select example'>
									  <option selected disabled>Skrzynia biegów</option>
									  <option value='1'>Manualna</option>
									  <option value='2'>Automatyczna</option>
									</select>
								</div>
							</div>
							<div class='row justify-content-center text-center'>
								<div class='mb-4 col-5'>
								<label for='model' class='form-label h3 '>Paliwo</label>
									<select class='form-select' aria-label='Default select example'>
									  <option selected disabled>Paliwo</option>
									  <option value='1'>Benzyna</option>
									  <option value='2'>Diesel</option>
									</select>
								</div>
							</div>
							<div class='row justify-content-center text-center'>
								<div class='mb-4 col-5'>
								<label for='model' class='form-label h3 '>Liczba osób</label>
									<select class='form-select' aria-label='Default select example'>
									  <option selected disabled>liczba osób</option>
									  <option value='1'>2</option>
									  <option value='2'>5</option>
									</select>
								</div>
							</div>
							<div class='row justify-content-center text-center'>
								<div class='mb-4 col-5'>
								<label for='model' class='form-label h3 '>Rok produkcji</label>
									<input class='form-control' value='{$wyn['year_of_production']}' type='date'>
								</div>
							</div>
							<div class='row justify-content-center text-center'>
								<div class='mb-4 col-5'>
									<button class='btn btn-success bt-lg' type='submit'>Edytuj</button>
								</div>
							</div>							
						</form>
						";}
	    			
						?>
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