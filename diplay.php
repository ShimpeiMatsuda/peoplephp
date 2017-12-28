<?php
require_once 'connect.php';
if(isset($_POST['delete'])){
	$sq="DELETE FROM persontbl WHERE perid=".$_POST['perid'];
	$con->query($sq);
	if($con->query($sq)==TRUE){
		echo "Successfuly deleted row". $_POST['perid'];
	}else{
		echo "Error";
	}
}
?>
<form action="" method="POST">
<input type="text" name="search">
<input type="submit" name="searchbtn" value="SEARCH">
</form>	
<?php
if(isset($_POST['searchbtn'])){
	$str = $_POST['search'];
	$sql = "SELECT * FROM countrytbl, persontbl 
		WHERE countrytbl.countryid=persontbl.countryid AND persontbl.name='$str'";
		//this is only for the search
}else{
	$sql = "SELECT * FROM countrytbl, persontbl 
		WHERE countrytbl.countryid=persontbl.countryid";
}

$result=$con->query($sql);
if($result->num_rows > 0){
	echo "<table border='1'>";
	echo "<tr><td>ID</td><td>Name</td><td>Country</td><td>Gender</td><td>Age</td><td>Address</td><td>Description</td><td>Delete</td><td>Edit</td></tr>";
	while($row = $result->fetch_assoc()){ 
		?><form action="" method="POST">
		  <input type="hidden" value="<?php echo $row['perid'];?>" name="perid">
	<?php	echo "<tr>";
			echo "<td>".$row['perid']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['countryname']."</td>";
			echo "<td>".$row['gender']."</td>";
			echo "<td>".$row['age']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['description']."</td>";
			echo "<td><input type='submit' value='Delete' name='delete'>
			</td>";
			echo "<td><a href='edit.php?perid=".$row['perid']."'>Edit</a></td>";
			echo "</tr>";
			}

	echo "</table>";		
}
else{
	echo "No record　found";
	//when serach can't find anything aeppeared
}
?>
<br>
<a href="home-page.php">Add new</a>