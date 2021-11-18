<?php
include 'common\bt.php';
include 'common\navbar.php';
include 'common\odczyt.php'
?>
<doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
	        <title>Twój wymarzony samochód</title>
	        <link rel="stylesheet" href="common/projekt.css">
        </head>
        <body class="bg-gray">
            <div class="container-fluid bg-gray text-white shadow pt-5">
				<div class="row">
					<div class="container col-5 bg-gray mb-5">
						<img class="img-fluid" src="images/<?php echo $photo['patch']?>">
					</div>
					<div class="container col-7 mb-5 bg-gray">
						<div class="row">
							<div class="container col-12 h2 text-center">
								<?php
									if($row['producer_id']==1)
												{
													echo"Rolls-Royce";
												}
												else
												{
													if($row['producer_id']==2)
													{
														echo"Ferrari";
													}
													else
													{
														if($row['producer_id']==3)
														{
															echo"Porsche";
														}	
														else
														{
															if($row['producer_id']==4)
														{
															echo"Mercedes";
														}
														else
														{
															if($row['producer_id']==5)
														{
															echo"BMW";
														}
														else
														{
															if($row['producer_id']==6)
															{
																echo"Lamborghini";
															}
															else
															{
																if($row['producer_id']==7)
															{
																echo"Audi";
															}	
															}
														}	
														}	
														}
													}
												}
												echo "  ";
												echo $row['model'];
								?>
							</div>
							<div class="container col-5 pt-3">
								<table class="table text-white h4">
										<tr>
										<td>Rok produkcji</td>
										<td><?php echo $row['year_of_production']?></td>
										</tr>
										<tr>
										<td>Moc silnika</td>
										<td> <?php echo $row['power']?> Koni</td>
										</tr>
										<tr>
										<td>Skrzynia biegów</td>
										<td>
											<?php 
												if($row['transsmision_id'] == 1)
												{
 												echo"Automatyczna";
												}
												else
												{
												echo"Manualna";
												}
											?>
										</td>
										</tr>
										<tr>
										<td>Paliwo</td>
										<td>
											<?php  
												if($row['fuel_id'] == 1)
												{
												echo"Benzyna";
												}
												else
												{
												echo"Diesel";
												}
											?>
										</td>
										</tr>
										<tr>
										<td>Ilość miejsc</td>
										<td><?php echo $row['number_of_seat']?></td>
										</tr>
								</table>
							</div>
							<div class="container col-3 h2 text-center">
								Cena:<br></br>
								<?php echo $row['price']?>zł/doba
							</div>
						</div>
					</div>
					<div class="container col-12 mt-5 bg-gray ">
						<form method="post">
						<div class="row">
							<div class="container col-4 mb-3 mt-4">
								<div class="row">
									<div class="container col-12 h3">
									 Dzień wypożyczenia
									</div>
									<div class="input-group w-75">
										<input class="form-control py-2 border-right-0 border" type="date" value="datestart" name="start" id="example-input" placeholder="Wybierz datę">
									</div>
								</div>
							</div>	
							<div class="container col-4 mb-3 mt-4">
								<div class="row">
								<div class="container col-12 h3">
									 Dzień oddania
									</div>
									<div class="input-group w-75">
										<input class="form-control py-2 border-right-0 border" type="date" value="dateend" name="koniec" id="example-input" placeholder="Wybierz datę">

									</div>
								</div>
							</div>
							<div class="container col-1 mb-5 mt-4">
								<button type="submit" name="sprawdz" class="btn btn-light btn-success mt-5">Sprawdź cenę</button>
							</div>
							<div class="container col-2 mb-3 mt-4">
								<div class="container col-12 h3 text-center">
									 Suma<br></br>
									<?php
										if(isset($_POST['sprawdz']))
											{
												$date1=$_POST['start'];
												$date2=$_POST['koniec'];
													$differenceFormat = '%a';
													$datetime1 = date_create($date1);
													$datetime2 = date_create($date2);
												   
													$interval = date_diff($datetime1, $datetime2);

													$days = $interval->format($differenceFormat);
													
													$suma= $row['price'] * intval($days);
													echo $suma;											
																								
											}																			
									?>
								</div>
							</div>
							</form>
							<div class="container col-1 mb-5 mt-4">
								<button class="btn btn-light btn-success mt-5">Zarezerwuj</button>
							</div>
						</div>
						
					</div>	
				</div>
			</div>
			</div>
        </body>
    </html>
<div class="fixed-bottom">
<?php
include ('common\footer.php');
?>
</div>