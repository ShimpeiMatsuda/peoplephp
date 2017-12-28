<?php
require_once 'connect.php';
//if user is not yet log in go back to log-in page
if(! isset($_SESSION['sessid'])){
	header('Location:log-in.php');
	exit;
}else{
	header('Location:home-page.php');
}
