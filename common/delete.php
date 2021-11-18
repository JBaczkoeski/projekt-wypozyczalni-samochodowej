<?php 
	include('dbconn.php');
	if(isset($_GET['usun']))
	{
		$id = $_GET['usun'];
		$rows = mysqli_query($conn,"DELETE FROM `offers` WHERE `id`=$id");
		header("location:..\admin.php");
	}
?>