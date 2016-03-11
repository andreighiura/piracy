<?php

$db=new mysqli('localhost','root','','webprogramming');

if(isset($_GET['s']) && $_GET['s'] != ''){
	$s =$_GET['s'];
	$sql = "SELECT * FROM `users` WHERE id='".$s."'";
	$result = $db->query($sql);
	$user= $result->fetch_assoc();
	
	if($user==null){
		
		echo "newUser";
	
	
	}
	else{
		echo json_encode($user);
	}
	}


?>