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
                    <div class="container-fluid col-7 bg-gray text-white text-center h-100">
                        <div class="row d-flex justify-content-center pb-5">
                            <div class="col-12 text-center h2 mb-5 pt-5">
                                Zaloguj
                            </div>
                            <form class="form col-6">
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <input type="text" class="form-control" placeholder="E-mail">
                                    </div>                            
                                    <div class="col-12 mb-4">
                                        <input type="text" class="form-control" placeholder="Hasło">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <button type="submit" class="btn btn-success">Zaloguj</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        </body>
    </html>
<div class="fixed-bottom">
<?php
include ('footer.php');
?>
</div>