<?php
 
session_start();
$_SESSION['zalogowany']=false;
echo ("zostales wylogowany") ;
 header('Location: ..\projekt.php');
?> 