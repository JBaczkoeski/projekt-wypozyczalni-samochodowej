<?php
include 'common\navbar.php';
include 'common\bt.php';
include 'common\zarejestruj.php';
?>
<doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
	        <title>Twój wymarzony samochód</title>
	        <link rel="stylesheet" href="projekt.css">
        </head>
        <body>
                    <div class="container-fluid col-7 bg-gray text-white text-center h-100">
                        <div class="row d-flex justify-content-center pb-5">
                            <div class="col-12 text-center h2 mb-5 pt-5">
                                Zarejestruj
                            </div>
                            <form method="post" action="zarejestruj.php" class="form col-6">
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <input type="text" name="email" class="form-control" placeholder="E-mail">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <input type="text" name="imie" class="form-control" placeholder="Imię">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <input type="text" name="nazwisko" class="form-control" placeholder="Nazwisko">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <input type="password" name="haslo1" class="form-control" placeholder="Hasło">
                                    </div>
									<div class="col-12 mb-4">
                                        <input type="password" name="haslo2" class="form-control" placeholder="Powtórz hasło">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <button type="submit" name="rejestracja" class="btn btn-success">Zarejestruj</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        </body>
    </html>
<div class="fixed-bottom">
<?php
include ('common\footer.php');
?>
</div>