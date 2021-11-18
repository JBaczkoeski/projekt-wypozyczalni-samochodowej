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
	        <link rel="stylesheet" href="common/projekt.css">
            <script>
                function sprawdzanie()
                {
                    
                    
                    var imie = document.getElementById('imie').value;
                    var nazwisko = document.getElementById('nazwisko').value;
                    var haslo1 = document.getElementById('haslo1').value;
                    var haslo2 = document.getElementById('haslo2').value;
                    if(!imie)
                    {
                        var error = 'Brak imienia';
                        var errorMassage = document.getElementById('error');
                        errorMassage.innerHTML = error;
                    }
                    
                    
                        if(!nazwisko)
                    { 
                        var error = 'Brak nazwiska';
                        var errorMassage = document.getElementById('error');
                        errorMassage.innerHTML = error;
                    }
                
                    
                        if(haslo1.length>=8)
                    { 
                        var error = 'Hasło musi mieć conajmniej 8 znaków';
                        var errorMassage = document.getElementById('error');
                        errorMassage.innerHTML = error;
                    }
                
                    
                        if(!haslo1==haslo2)
                    { 
                        var error = 'Hasła nie są takie same';
                        var errorMassage = document.getElementById('error');
                        errorMassage.innerHTML = error;
                    }       
                        
                                    
                                    
                                
                                
                    
                    if(!error)
                    {                        
                        location.assign('common/zarejestruj.php');
                    }
                }
            </script>
        </head>
        <body>
                    <div class="container-fluid col-7 bg-gray text-white text-center h-100">
                        <div class="row d-flex justify-content-center pb-5">
                            <div class="col-12 text-center h2 mb-5 pt-5">
                                Zarejestruj
                            </div>
                            <form name="rejestracja" method="post" action="common/zarejestruj.php"  class="form col-6">
                                <div class="row">
                                    <div id="error" class="col-12 mb-4 h3 text-danger">
                                        
                                    </div>
                                    <div class="col-12 mb-4">
                                        <input type="text" name="email" class="form-control" placeholder="E-mail" >
                                    </div>
                                    <div class="col-12 mb-4">
                                        <input type="text"  id="imie" name="imie" class="form-control" placeholder="Imię" >
                                    </div>
                                    <div class="col-12 mb-4">
                                        <input type="text"  id="nazwisko" name="nazwisko" class="form-control" placeholder="Nazwisko" >
                                    </div>
                                    <div class="col-12 mb-4">
                                        <input type="password" id="haslo1" name="haslo1"  name="haslo1" class="form-control" placeholder="Hasło" >
                                    </div>
									<div class="col-12 mb-4">
                                        <input type="password" id="haslo2" name="haslo2" name="haslo2" class="form-control" placeholder="Powtórz hasło" >
                                    </div>
                                    <div class="col-12 mb-4">
                                        <button type="submit" id="rejestruj" name="rejestracja" class="btn btn-success">Zarejestruj</button>
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