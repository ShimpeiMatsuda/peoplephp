<?php
require_once 'connect.php';
//This is for connent to display 
$id = isset($_GET['perid'])?(int)$_GET['perid']:0;
$sql="SELECT* FROM persontbl WHERE perid=$id";
$exe=$con->query($sql);
$result=$exe->fetch_assoc();
//This is for update
if(isset($_POST['update'])){
	$name = $_POST['name'];
	$country=$_POST['country'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$description=$_POST['description'];
	$sql = "UPDATE persontbl SET name='$name',countryid=$country, gender='$gender',age='$age',address='$address',description='$description' WHERE perid=$id";
	$con->query($sql);
	if($con->query($sql)=== TRUE){
		echo 'Success edit';
	}
	else{
		echo 'Error';
	}
}
 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<h1>Edit Form</h1>
		Name:<input type="text" name="name" value="<?php echo ($result['name']);?>"><br>
		Country:<select name="country">
			    	<option value="1"<?php echo ($result['countryid']==1)? 'selected=""':'';?>>Japan</option>
			    	<option value="2"<?php echo ($result['countryid']==2)? 'selected=""':'';?>>Philippines</option> 
			    	<option value="3"<?php echo ($result['countryid']==3)? 'selected=""':'';?>>Others</option> 
		       </select><br>
		Gender:<br>
		Male:<input type="radio" name="gender" value="male" <?php echo ($result['gender']=='male')? 'checked=""':'';?>>
		Female:<input type="radio" name="gender" value="female"<?php echo ($result['gender']=='female')? 'checked=""':'';?>><br>
		Age:<input type="number" name="age" value="<?php echo ($result['age']); ?>"><br>
		Address:<input type="text" name="address" value="<?php echo ($result['address']);?>"><br>
		Description:<br><textarea id="message" rows="15" cols="50" name="description"><?php echo($result['description']);?></textarea><br>
		<input type="submit" name="update" value="update">
   </form>
   <br>
   <a href="diplay.php">Go back</a>



</body>
</html>