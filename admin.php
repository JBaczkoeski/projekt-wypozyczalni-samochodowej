<?php
include ('bt.php');
include ('navbarA.php');
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
            <div class="container col-2 bg-gray pt-5">
                <div class="container col-12 h3 text-white text-center">
                    Filtry          
                </div>
            <form>
                <div class="row">
                <div class="container col-6 h5 text-white text-center">
                    <select id="inputState" class="form-control ">
						<option selected disabled>Marka</option>
					</select>
                </div>
                <div class="container col-6 h5 text-white text-center">
                    <select id="inputState" class="form-control ">
						<option selected disabled>Model</option>
					</select>
                </div>
                <div class="container col-12 h5 text-white text-center">
                    <button class="btn btn-light" type="submit ">Szukaj</button>
                </div>
                <div class="container col-12 h5 mt-5 bt bt-lg bt-success text-white text-center">
					<a href="dodawanie.php" role="button" class="btn btn-success btn-lg">Dodaj ofertę</a>
                </div>
                </div>
            </form>          
            </div>
            <div class="container col-10  pt-5">
                <div class="row">
                    <?php
						for( $x = 1; $x <= 20; $x++ ){
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
		    						<a href="edycja.php" class="card-link">Edytuj</a>
                                    <a href="oferta.php" class="card-link">Usuń</a>
								</div>
							</div>
						</div>
	    			';}
			       ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
include ('footer.php');
?>