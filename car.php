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
                aaaa
            </div>
        </div>
    </div>
</body>
</html>
<?php 
include ('footer.php');
?>