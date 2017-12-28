<?php
require_once'connect.php';
if(isset($_POST['signup'])){
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=md5($_POST['password']);
	if($username=="" or $email==""or $password=="" ){
		echo "You have to write all of your forms";
	}else{
		$sql="INSERT INTO usertbl(username,email,password)VALUES('$username','$email','$password')";
		$con->query($sql);
		echo "Make it";
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
		Username:<input type="text" name="username"><br>
		Email:<input type="text" name="email"><br>
	    Password:<input type="password" name="password"><br>
	 <input type="submit" name="signup" value="Sign-Up">
	 </form>   
	 <a href="log-in.php">Log-in</a>


</body>
</html>