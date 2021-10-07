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
			<div class="container col-12 h1 bg-gray text-center text-white mt-5">
				Wiadomości
			</div>
			<div class="container col-12 px-3 ">
				<div class="row justify-content-center">
					<?php
						for( $x = 1; $x <= 8; $x++ ){
						    echo'
								<div class="card m-5 d-flex" style="width: 18rem;">
								  <div class="card-body">
									<h5 class="card-title">Jakub</h5>
									<h6 class="card-subtitle mb-2 text-muted">Szczecin<br>jakub@gmail.com<br>Współpraca</h6>
									<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
									Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,
									when an unknown printer took a galley of type and scrambled it to make a type specimen book.
									It has survived not only five centuries, but also the leap into electronic typesetting, remaining
									essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
									Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									<a href="odpowiedz.php" class="card-link link-primary">Odpisz</a>
									<a href="#" class="card-link link-danger">Usuń</a>
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