<?php
include ('bt.php');
include ('navbar.php');
?>
<doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
	        <title>Twój wymarzony samochód</title>
	        <link rel="stylesheet" href="projekt.css">
        </head>
        <body>
            <div class="container-fluid  text-white">
				<div class="row">
					<div class="container col-3 bg-danger mb-4 bg-gray">
						Zdjęcie
					</div>
					<div class="container col-9 bg-success mb-4 bg-gray">
						<div class="row">
							<div class="container col-12 h2 text-center">
								Nazwa auta
							</div>
							<div class="container col-9">
								Informacja
							</div>
							<div class="container col-3 h2">
								Cena
							</div>
						</div>
					</div>
					<div class="container col-12 bg-gray mt-4">
						<form>
						<div class="row">
							<div class="container col-4 mb-3 mt-3">
								<div class="row">
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
							<div class="container col-4 mb-3 mt-3">
								<div class="row">
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
							<div class="container col-2 mb-3 mt-3">
								<button class="btn btn-light btn-success">Zarezerwuj</button>
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