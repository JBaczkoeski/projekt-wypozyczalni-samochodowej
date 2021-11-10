	<?php
  session_start();
  echo'
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
  <div class="container col-7">
  <img src="images/logo3.png">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</div>
<div class="contaniner col-5 d-flex justify-content-end">
  <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
	<ul class="navbar-nav mb-2 mb-lg-0 d-flex">
        <li class="nav-item">
          <a class="nav-link active h5" aria-current="page" href="projekt.php">Strona główna</a>
        </li>
		<li class="nav-item">
          <a class="nav-link h5" href="car.php">Samochody</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h5" href="wiadomości.php">Wyślij Wiadomość</a>
        </li>
        ';?>
        <?php
        if(($_SESSION['zalogowany']) == true)
        {
          echo'
          <li class="nav-item">
          <form method="post" action="common\wylogowanie.php">
            <button type="submit" class="btn btn-link nav-link h5 text-white">Wyloguj</button>
          </form>
        </li>';
        }
        else
        {
          echo'
          <li class="nav-item">
          <a class="nav-link h5" href="logowanie.php">Zaloguj</a>
        </li>
		    <li class="nav-item">
          <a class="nav-link h5" href="rejestracja.php">Zarejestruj się</a>
        </li>'; 
        }
        ?>
        <?php
        echo'
  </div>
  </div>
</nav>

';
?>
