<?php

$db=new mysqli('localhost','root','','webprogramming');

	//$id=$_POST[idFL];
	//$name =$_POST[nameFL];
	//$email =$_POST[emailFL];
	//$steam =$_POST[steamFL];
	//$hs =$_POST[hsFL];
	//$lol =$_POST[lolFL];
	//$sql="INSERT INTO `users` (`id`, `name`, `email`, `id_lol`, `id_steam`, `id_battlenet`, `pct_lol`, `pct_battlenet`, `pct_steam`, `pct_gen`) VALUES ('1', '1', '1', '1', '1', '1', '1', '1', '1', '1')";


	$sql="INSERT INTO `users` (`id`, `name`, `email`, `id_lol`, `id_steam`, `id_battlenet`, `pct_lol`, `pct_battlenet`, `pct_steam`, `pct_gen`) VALUES ('$_POST[idFL]', '$_POST[nameFL]', '$_POST[emailFL]', '$_POST[lolFL]', '$_POST[hsFL]', '$_POST[steamFL]', '0', '0', '0', '0')";
	echo $sql;
	$db->query($sql);
	header("Location: /piracy/");


?>