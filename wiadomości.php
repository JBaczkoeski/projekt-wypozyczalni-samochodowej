<?php
include 'common\navbar.php';
include 'common\bt.php';
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
                                Wyślij wiadomość
                            </div>
                            <form class="form col-8 text-center">
                                <div class="row">
                                    <div class="col-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Imię">
                                    </div>
                                    <div class="col-6 mb-4">
                                        <input type="text" class="form-control" placeholder="E-mail">
                                    </div>
                                    <div class="col-6 mb-4">
                                        <select class="form-select" aria-label=".form-select-lg example">
                                            <option selected>Powód</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Miasto">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <textarea type="text" class="form-control" placeholder="Tekst"></textarea>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <button type="submit" class="btn btn-success">Wyślij</button>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <button type="clear" class="btn btn-danger">Wyczyść</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        </body>
    </html>
<div class="fixed-bottom">
<?php
include 'common\footer.php';
?>
</div>