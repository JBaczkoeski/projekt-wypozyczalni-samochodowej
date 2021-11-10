<?php
if (isset($_POST['rejestracja']))
{
include('dbconn.php');

$email=$_POST['email'];
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$haslo1=$_POST['haslo1'];
$haslo2=$_POST['haslo2'];

if ($haslo1 == $haslo2) // sprawdzam hasła
            {   
                $haslo=md5($haslo1);
                $sql="INSERT INTO `users`(`id`, `first_name`, `last_name`, `email`, `password`, `admin`)
                 VALUES ('','$imie','$nazwisko','$email','$haslo','0')";
                $conn= $conn->query($sql);
                echo "Konto zostało utworzone!";
                header('Location: ..\projekt.php');
            }
        }    
?>