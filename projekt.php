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
<div class="container-fluid ">
	<div class="row">
		<div class="container col-12 bg-home">
			<div class="row">	
				<div class="container col-xl-3  text-center mt-3 order-first shadow col-md-3 col-sm-12">	
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
				<div class="container col-9 mt-3 d-none d-md-block bg-home">
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
						<div class="container col-6 bg-home">
						<div id="carouselExampleControlss" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active ">
								<img src="https://cdn.pixabay.com/photo/2017/06/29/09/25/car-2453605_960_720.jpg" class="d-block w-100 " alt="...">
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
				<div class="container col-12  shadow  mb-3 mt-2 bg-home">	
					<div class="row">
						<div class="container col-12 text-center mb-5">
							<h2>Co nas wyróżnia</h2>
						</div>
						<div class="container col-3 text-center h5 mb-3">
						<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-clock-history img-fluid" viewBox="0 0 16 16">
  							<path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
  							<path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
  							<path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
						</svg><br></br>
						Szybka, bezpłatna rezerwacja online, bez konieczności podawania danych karty
						</div>
						<div class="container col-3 text-center h5 mb-3">
						<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-clipboard-check img-fluid" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
							<path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
							<path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
						</svg><br></br>
							nowe i bezpieczne samochody
						</div>
						<div class="container col-3 text-center h5 mb-3">
						<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-clipboard-x img-fluid" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"/>
							<path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
							<path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
						</svg><br></br>
							możliwość bezpłatnej rezygnacji do 24h przed odbiorem pojazdu
						</div>
					</div>
				</div>
				<div class="container col-12 bm-3 d-none d-md-block bg-home">	
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#osobowe" role="tab" aria-controls="home" aria-selected="true">Osobowe</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#dostawcze" role="tab" aria-controls="profile" aria-selected="false">Dostawcze</a>
						</li>
					</ul>
					<div class="tab-content mt-4 ml-5" id="myTabContent">
						<div class="tab-pane fade show active" id="osobowe" role="tabpanel" aria-labelledby="home-tab">
								<div class="row">
								<?php
								for( $x = 1; $x <= 4; $x++ ){
								echo'
									<div class="container col-3 order-first col-xl-3 col-sm-6 col-md-6">
										<div class="card" style="width: 23rem;">
												<img src="https://cdn.pixabay.com/photo/2015/01/19/13/51/car-604019_960_720.jpg" class="card-img-top" alt="...">
												<div class="card-body">
													<h5 class="card-title">Audi A5</h5>
												</div>
												<ul class="list-group list-group-flush">
													<li class="list-group-item">
													<img style="max-width:40px" alt="benzyna" src="https://kaizenrent.pl/images/other-icon-2.png">
														Benzyna
													</li>
													<li class="list-group-item">
													<img style="max-width:40px" alt="benzyna" src="https://kaizenrent.pl/images/car-manual-icon.png">
														Automatyczna 
													</li>
													<li class="list-group-item">
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
															<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
															<path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
															<path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
														</svg>
														5 Osobowy
													</li>
												</ul>
												<div class="card-body">
													<a href="#" class="card-link">Wynajmij</a>
												</div>
										</div>
									</div>
									';}
									?>																										
								</div>
							
						</div>
							
					
						<div class="tab-pane bg-home" id="dostawcze" role="tabpanel" aria-labelledby="profile-tab">
							<div class="row">
								<?php
								for( $x = 1; $x <= 4; $x++ ){
								echo'
									<div class="container col-3">
										<div class="card" style="width: 23rem;">
												<img src="https://cdn.pixabay.com/photo/2015/09/02/12/25/bmw-918408_960_720.jpg" class="card-img-top" alt="...">
												<div class="card-body">
													<h5 class="card-title">Audi A5</h5>
												</div>
												<ul class="list-group list-group-flush">
													<li class="list-group-item">
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
															<path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
														</svg>
														Benzyna
													</li>
													<li class="list-group-item">
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shift-fill" viewBox="0 0 16 16">
															<path d="M7.27 2.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v3a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-3H1.654C.78 10.5.326 9.455.924 8.816L7.27 2.047z"/>
														</svg>
														Automatyczna
													</li>
													<li class="list-group-item">
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
															<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
															<path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
															<path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
														</svg>
														5 Osobowy
													</li>
												</ul>
												<div class="card-body">
													<a href="#" class="card-link">Wynajmij</a>
											</div>
										</div>
									</div>
									';}
									?>																										
								</div>	
							</div>
						</div>
	
					</div>
				<div class="container col-12 mt-5 mb-4 text-center d-none d-sm-block bg-home">	
					<div class="row">
						<div class="container col-12 text-center h1">
							Aktualności
						</div>
							<?php
							for( $x = 1; $x <= 4; $x++ ){
							echo'
						<div class="container   col-auto mb-4">
							<div class="card" style="width: 38rem;">
								<img src="https://cdn.pixabay.com/photo/2014/09/03/20/15/shoes-434918_960_720.jpg" class="card-img-top img-fluid" alt="...">
								<div class="card-body">
									<h5 class="card-title">Zainspiruj się i wynajmij auto w super cenie</h5>
									<p class="card-text">Wybierz swój wymarzony kierunek i skorzystaj z naszych turbo rabatów na weekend!
										 Specjalny 30% rabat na wypożyczenie auta w Kaizen Rent otrzymasz po wpisaniu kodu PRZYGODA.
										  Przed nami cztery weekendy, podczas których zachęcamy Was do wyprawy w najbardziej atrakcyjne rejony Polski.</p>
									<a href="#" class="btn btn-primary">Czytaj więcej</a>
								</div>
							</div>
						</div>
						';}
						?>
					</div>
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