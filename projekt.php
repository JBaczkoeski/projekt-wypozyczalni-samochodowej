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
				<div class="container col-3  text-center mt-3">	
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
				<div class="container col-9 bg-success mt-3">	
					asadsadsa	
				</div>
				<div class="container col-12 bg-danger">	
					asadsadsa	
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