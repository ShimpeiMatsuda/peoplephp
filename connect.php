<?php

session_start();

$localhost 	= "localhost"; 
	$username 	= "root"; 
	$password 	= ""; 
	$dbname 	= "peopledb"; 
	// create connection 
	$con = new mysqli($localhost, $username, $password, $dbname); 

	// check connection 
	if($con->connect_error) {
	    die("connection failed : " . $con->connect_error);
	} 