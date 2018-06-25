<?php

// Check for posted data and filter
if($_POST){

	$email = (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) ? "Email is valid: {$_POST['email']}" : 'Email is Invalid';
	$username = (filter_var($_POST['username'], FILTER_SANITIZE_STRING)) ? "Username is valid: {$_POST['username']}" : 'Username is Invalid';	
	$password = $_POST['password'];


	// Scrub data with htmlspecialchars()
	echo htmlspecialchars($email) . '<br>';	
	echo htmlspecialchars($username) . '<br>'; 	
	echo htmlspecialchars($password) . '<br>';
} 
