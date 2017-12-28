<?php
require_once 'connect.php';

if(isset($_POST['log'])){
	$username=mysqli_real_escape_string($con, $_POST['username']);
	$password= mysqli_real_escape_string($con, md5($_POST['password']));
	$sql   ="SELECT * FROM usertbl WHERE username ='$username' and password='$password'";

	$query = $con->query($sql);
 	if($query->num_rows > 0){
		$result =$query->fetch_assoc(); 
		$_SESSION['sessid'] = $result['userid']; 
		header('Location:home-page.php');
	}else{
		echo "Invalid username or password";
	} 
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <form method="POST" action="">
   	User name:<input type="text" name="username"><br>
   	Password:<input type="password" name="password"><br>
   	<input type="submit" name="log" value="Log_In">
   </form>
<a href="sign-up.php">sign-up</a>
</body>
</html>