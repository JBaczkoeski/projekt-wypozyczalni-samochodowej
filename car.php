<?php
include 'common\navbar.php';
include 'common\bt.php';
include 'common\read.php';

?>

<doctype html>
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
                <div class="container col-6 h5 text-white text-center">
                    <select id="inputState" class="form-control ">
						<option selected disabled>Rok prod</option>
					</select>
                </div>
                <div class="container col-6 h5 text-white text-center">
                    <select id="inputState" class="form-control ">
						<option selected disabled>Moc</option>
					</select>
                </div>
                <div class="container col-6 h5 text-white text-center">
                    <select id="inputState" class="form-control ">
						<option selected disabled>Rodzaj silnika</option>
					</select>
                </div>
                <div class="container col-6 h5 text-white text-center">
                    <select id="inputState" class="form-control ">
						<option selected disabled>Kolor</option>
					</select>
                </div>
                <div class="container col-6 h5 text-white text-center">
                    <select id="inputState" class="form-control ">
						<option selected disabled>Skrzynia</option>
					</select>
                </div>
                <div class="container col-6 h5 text-white text-center">
                    <select id="inputState" class="form-control ">
						<option selected disabled>Ilość miejsc</option>
					</select>
                </div>
                <div class="container col-12 h5 text-white text-center">
                    <button class="btn btn-light" type="submit ">Szukaj</button>
                </div>
                </div>
            </form>          
            </div>
            <div class="container col-10  pt-5">
                <div class="row">
                   <?php						
						foreach($results as $key => $wyn){
							include 'common\dbconn.php';;
							$ids=$wyn['id'];							
							$sql = ("SELECT * FROM `photos` WHERE offer_id= '$ids'");
							$results = $conn -> query($sql);
							$dys = $results->fetch_assoc();
						    ?>
							    <div class='container col-3 order-first col-xl-3 col-sm-6 col-md-6'>
									<div class='card' style='width: 23rem;'>
										<img src='images/<?php echo $dys['patch'];?>' class='card-img-top img-fluid img-responsive' alt='...'>
											<div class='card-body'>
												<h5 class='card-title'><?php 
												if($wyn['producer_id']==1)
												{
													echo"Rolls-Royce";
												}
												else
												{
													if($wyn['producer_id']==2)
													{
														echo"Ferrari";
													}
													else
													{
														if($wyn['producer_id']==3)
														{
															echo"Porsche";
														}	
														else
														{
															if($wyn['producer_id']==4)
														{
															echo"Mercedes";
														}
														else
														{
															if($wyn['producer_id']==5)
														{
															echo"BMW";
														}
														else
														{
															if($wyn['producer_id']==6)
															{
																echo"Lamborghini";
															}
															else
															{
																if($wyn['producer_id']==7)
															{
																echo"Audi";
															}	
															}
														}	
														}	
														}
													}
												}
												;echo" "  ;echo $wyn['model']?></h5>
											</div>
											<ul class='list-group list-group-flush'>
												<li class='list-group-item'>
												<img style='max-width:40px' alt='benzyna' src='https://kaizenrent.pl/images/other-icon-2.png'>
												<?php  
													if($wyn['fuel_id'] == 1)
													{
														echo"Benzyna";
													}
													else
													{
														echo"Diesel";
													}
												?>
												</li>
												<li class='list-group-item'>
												<img style='max-width:40px' alt='benzyna' src='https://kaizenrent.pl/images/car-manual-icon.png'>
												<?php 
													if($wyn['transsmision_id'] == 1)
													{
 														echo"Automatyczna";
													}
													else
													{
														echo"Manualna";
													}
												 ?> 
												</li>
												<li class='list-group-item'>
													<svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-people-fill' viewBox='0 0 16 16'>
														<path d='M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/>
														<path fill-rule='evenodd' d='M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z'/>
														<path d='M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z'/>
													</svg>
													<?php echo $wyn['number_of_seat']?>
												</li>
											</ul>
				    					<div class='card-body'>
									<a href="oferta.php" class="card-link">Wynajmij</a>
								</div>
							</div>
						</div>
					<?php
						;}	
			       ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
include 'common\footer.php';
?>