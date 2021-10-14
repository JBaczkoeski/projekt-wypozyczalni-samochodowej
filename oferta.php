<?php
include 'common\bt.php';
include 'common\navbar.php';
?>
<doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
	        <title>Twój wymarzony samochód</title>
	        <link rel="stylesheet" href="projekt.css">
        </head>
        <body>
            <div class="container-fluid bg-gray text-white shadow pt-5">
				<div class="row">
					<div class="container col-5 bg-gray shadow mb-5">
						<img class="img-fluid" src="images/camaro.jpg">
					</div>
					<div class="container col-7 mb-5 bg-gray">
						<div class="row">
							<div class="container col-12 h2 text-center">
								Chevrolet Camaro ZL1
							</div>
							<div class="container col-5 pt-3">
								<table class="table text-white h4">
										<tr>
										<td>Rok produkcji</td>
										<td>2021</td>
										</tr>
										<tr>
										<td>Moc silnika</td>
										<td> 720 Koni</td>
										</tr>
										<tr>
										<td>Skrzynia biegów</td>
										<td>Automatyczna</td>
										</tr>
										<tr>
										<td>Paliwo</td>
										<td>Benzyna</td>
										</tr>
										<tr>
										<td>Ilość miejsc</td>
										<td>Cztery</td>
										</tr>
								</table>
							</div>
							<div class="container col-3 h2 text-center">
								Cena:<br></br>
								250zł/doba
							</div>
						</div>
					</div>
					<div class="container col-12 mt-5 bg-gray ">
						<form>
						<div class="row">
							<div class="container col-4 mb-3 mt-4">
								<div class="row">
									<div class="container col-12 h3">
									 Dzień wypożyczenia
									</div>
									<div class="input-group w-75">
										<input class="form-control py-2 border-right-0 border" type="date" value="datestart" id="example-input" placeholder="Wybierz datę">
										<span class="input-group-append ml-n4 z-index-1">
										<button class="btn btn-light border-left-0 border bg-white">
											<i class="fa fa-calendar-alt"></i>
										</button>
										</span>
									</div>
								</div>
							</div>	
							<div class="container col-4 mb-3 mt-4">
								<div class="row">
								<div class="container col-12 h3">
									 Dzień oddania
									</div>
									<div class="input-group w-75">
										<input class="form-control py-2 border-right-0 border" type="date" value="dateend" id="example-input" placeholder="Wybierz datę">
										<span class="input-group-append ml-n4 z-index-1">
										<button class="btn btn-light border-left-0 border bg-white">
											<i class="fa fa-calendar-alt"></i>
										</button>
										</span>
									</div>
								</div>
							</div>
							<div class="container col-2 mb-3 mt-4">
								<div class="container col-12 h3">
									 Suma
								</div>
							</div>
							<div class="container col-2 mb-5 mt-4">
								<button class="btn btn-light btn-success mt-5">Zarezerwuj</button>
							</div>
						</div>
						</form>
					</div>	
				</div>
			</div>
			</div>
        </body>
    </html>
<div class="fixed-bottom">
<?php
include ('footer.php');
?>
</div>