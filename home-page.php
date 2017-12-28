<?php

require_once'connect.php';
if(! isset($_SESSION['sessid'])){
	header('Location:log-in.php');
	exit;
}

if(isset($_POST['register'])){
		$name=$_POST['name'];
		$country=$_POST['country'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$address=$_POST['address'];
		$description=$_POST['description'];
	if($name=="" or $country=="" or $gender=="" or $age=="" or $address=="" or $description==""){
		echo "You have to write all of your forms";
	}else{
		$sql="INSERT INTO persontbl(name,countryid,gender,age,address,description)
					VALUES('$name',$country,'$gender',$age,'$address','$description')";
		if($con->query($sql)==TRUE){
		echo "Make it";
		}
		else{
			echo 'Error';
		}

	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Welcome</h1>
	<form method="POST" action="">
		Name:<input type="text" name="name"><br>
		Country:<select name="country">
			    	<option value="1">Japan</option>
			    	<option value="2">Philippines</option> 
			    	<option value="3">Others</option> 
		       </select><br>
		Gender:<br>
		Male:<input type="radio" name="gender" value="male">
		Female:<input type="radio" name="gender" value="female"><br>
		Age:<input type="number" name="age"><br>
		Address:<input type="text" name="address"><br>
		Description:<br><textarea id="message" rows="15" cols="50" name="description"></textarea><br>
	    <br>
	 <input type="submit" name="register" value="Add new">
	 </form><br>
	 <a href="diplay.php">Display</a><br>  
	 <a href="log-out.php">Log out here</a>

</body>
</html>