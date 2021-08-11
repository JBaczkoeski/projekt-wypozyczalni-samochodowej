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
<div class="container-fluid bg-dark">
	<div class="row">
		<div class="container col-12  bg-light">
			<div class="row">	
				<div class="container col-3  text-center mt-3 order-first shadow">	
					<h5>Sprawdź czy w twoim mieście jest auto którego szukasz</h5>
						<form>
							<select id="inputState" class="form-control ">
								<option selected disabled>Miasto</option>
							</select>
							<div class="input-group">
                				<input class="form-control py-2 border-right-0 border" type="date" value="date1" id="example-input" placeholder="Wybierz datę">
               					<span class="input-group-append ml-n4 z-index-1">
                    			<button class="btn btn-light border-left-0 border bg-white">
                        			<i class="fa fa-calendar-alt"></i>
                    			</button>
                				</span>
            				</div>
							<input class="variant_checkbox" name="start_finish_location" value="1" id="start_finish_location" type="checkbox">
							<i></i><input value="0" name="start_finish_location" type="hidden"><label for="start_finish_location" class="var_checkbox h6">
								Chcę zwrócić samochód w innym miejscu innym niż odbiór
							</label>
							<h5>Zwrot</h5>
							<div class="input-group">
                				<input class="form-control py-2 border-right-0 border" type="date" value="date1" id="example-input" placeholder="Wybierz datę">
               					<span class="input-group-append ml-n4 z-index-1">
                    			<button class="btn btn-light border-left-0 border bg-white">
                        			<i class="fa fa-calendar-alt"></i>
                    			</button>
                				</span>
            				</div><br></br>
							<button type="submit" class="btn btn-primary">Sprawdź</button>
							
						</form>
				</div>
				<div class="container col-9 mt-3 d-none d-md-block">
					<div class="row">						
						<div class="container col-6">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
								<img src="https://cdn.pixabay.com/photo/2017/06/29/09/25/car-2453605_960_720.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
								<img src="https://cdn.pixabay.com/photo/2018/11/17/18/58/shelby-3821716_960_720.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
								<img src="https://cdn.pixabay.com/photo/2012/11/02/13/02/car-63930_960_720.jpg" class="d-block w-100" alt="...">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
							</div>
						</div>
						<div class="container col-6">
						<div id="carouselExampleControlss" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
								<img src="https://cdn.pixabay.com/photo/2017/06/29/09/25/car-2453605_960_720.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
								<img src="https://cdn.pixabay.com/photo/2018/11/17/18/58/shelby-3821716_960_720.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
								<img src="https://cdn.pixabay.com/photo/2012/11/02/13/02/car-63930_960_720.jpg" class="d-block w-100" alt="...">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControlss" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControlss" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
							</div>
						</div>
					</div>
				</div>
				<div class="container col-12 shadow">	
					<div class="row">
						<div class="container col-12 text-center mb-5">
							<h2>Co nas wyróżnia</h2>
						</div>
						<div class="container col-3 text-center">
						<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
  							<path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
  							<path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
  							<path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
						</svg>
						<h3>Szybka,bezpłatna rezerwacja online,bez konieczności podawania danych karty</h3>
						</div>
						<div class="container col-3 text-center">
						<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
							<path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
							<path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
						</svg>
							<h3>nowe i bezpieczne samochody</h3>
						</div>
						<div class="container col-3 text-center">
						<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-clipboard-x" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"/>
							<path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
							<path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
						</svg>
							<h3>możliwość bezpłatnej rezygnacji do 24h przed odbiorem pojazdu</h3>
						</div>
					</div>
				</div>
				<div class="container col-12 bg-info">	
					nav nav-tabs	
				</div>
				<div class="container col-12 bg-primary">	
					aktualności	
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