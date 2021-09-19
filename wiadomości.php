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
            <div id="container-fluid">
                <div class="row">
                    <div class="container col-5 bg-gray text-white text-center ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 text-center h2">
                                Wyślij wiadomość
                            </div>
                            <form class="form col-8 text-center">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Imię">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="E-mail">
                                    </div>
                                    <div class="col-6">
                                        <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Imię">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Imię">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Imię">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
<?php
include ('footer.php');
?>