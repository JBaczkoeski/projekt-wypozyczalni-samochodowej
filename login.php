<?php
if (isset($_POST['zaloguj']))
{
$email=$_POST['email'];
$haslo=$_POST['haslo'];
$haslo1=md5($haslo);
// sprawdzanie czy jest taki użytkownik
if (mysqli_num_rows(mysqli_query($conn,"SELECT `email`,`password` FROM `users` WHERE `email` = '$email' AND `password` = '$haslo1'")) > 0)
        {        
            $_SESSION['zalogowany'] = true;
            $_SESSION['email'] = $email;
            
            echo "Witamy i życzymy miłego dnia :)";
        }
        else
        
         echo "Wpisano złe dane.";
    }         
        
?>