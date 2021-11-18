<?php
if (isset($_POST['zaloguj']))
{
	$email=$_POST['email'];
	$haslo=$_POST['haslo'];
	$haslo1=md5($haslo);
// sprawdzanie czy jest taki użytkownik
	$rows = mysqli_query($conn,"SELECT `first_name`,`last_name`,`email`,`password`,`admin` FROM `users` WHERE `email` = '$email' AND `password` = '$haslo1'");
	if (mysqli_num_rows($rows) == 1)
		{   
			$row = $rows->fetch_assoc();
            if($row['admin']== 1)
            {
                header('Location: admin.php');
                $_SESSION['zalogowany'] = true;
                $_SESSION['email'] = $email;
            }
            else
            {   
                header('Location: projekt.php');    
            $_SESSION['zalogowany'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['imie'] = $row['first_name'];
            $_SESSION['nazwisko'] = $row['last_name'];
            echo "Witamy i życzymy miłego dnia :)";
            }
        } 
}		
?>