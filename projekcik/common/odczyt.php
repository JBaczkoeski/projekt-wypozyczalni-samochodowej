<?php 
	include('dbconn.php');
	if(isset($_GET['odczyt']))
	{
		$id = $_GET['odczyt'];
		$rows = mysqli_query($conn,"SELECT * FROM `offers` WHERE `id`=$id");
		$row = $rows->fetch_assoc();						
		$p = mysqli_query($conn,"SELECT * FROM `photos` WHERE offer_id= '$id'");
		$photo = $p->fetch_assoc();		
	}
?>