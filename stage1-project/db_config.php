<?php

	$dbcon = mysqli_connect('localhost', 'root', '', '') or die( mysqli_connect_error());

	$createDB = "CREATE DATABASE IF NOT EXISTS topic_Project1";
	$do_query = mysqli_query($dbcon, $createDB) or die(mysqli_error($dbcon));

	$creatTB = "CREATE TABLE IF NOT EXISTS topic_project1.hng_users(
		userID  INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
		name VARCHAR(50) NOT NULL,
		email VARCHAR(50) NOT NULL
		
	)";
	$creatTBquery = mysqli_query($dbcon, $creatTB) or die(mysqli_error($dbcon));

	$select = mysqli_query($dbcon, "SELECT * FROM topic_Project1.hng_users") or die(mysqli_error($dbcon));
	if (mysqli_num_rows($select) < 1) {
		$insert = "INSERT INTO topic_Project1.hng_users(name, email) VALUES	
		('Isaac Etukudo', 'etukudoisaact@gmail.com'),
		('Chinyere Okeke', 'chi@gmail.com'),
		('Isaka Ogeneme', 'ogeneme@gmail.com'),
		('Mfoniso Akpan Ituen', 'mf@gmail.com')";

		$creatTBquery = mysqli_query($dbcon, $insert) or die(mysqli_error($dbcon));
	}
	
		
	/*
	
	*/
		
	


?>
