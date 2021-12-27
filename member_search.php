<?php
require('db.php');


$name="";



if (isset($_POST['name'])) {
	echo "<div class='container'>";
	echo "<table class='table table-bordered  table-hover mt-3'>";
	echo "<tr>";
	echo "<th>MEMBER ID</th>";
	echo "<th>MEMBER FIRST NAME</th>";
	echo "<th>MEMBER LAST NAME</th>";
	echo "<th>MEMBER PHONE</th>";
	echo "<th>MEMBER AGE</th>";
	echo "<th>MEMBER ADDRESS 1</th>";
	echo "<th>MEMBER ADDRESS 2</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	echo "</div>";


	$name=$_POST['name'];


		$que=mysqli_query($conn,"SELECT * FROM `userjoin` WHERE CONCAT(`id`,`f_name`,`l_name`,`phone`,`age`,`address1`,'address2') LIKE '%".$name."%'");
		if(mysqli_num_rows($que) > 0){
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['f_name']."</td>";
		echo "<td>".$row['l_name']."</td>";
		echo "<td>".$row['phone']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['address1']."</td>";
		echo "<td>".$row['address2']."</td>";
		echo "<td><a href='home.php?id=$row[id]&info=update_member'><i class='fas fa-pencil-alt'></i></a></td>";
		echo  "<td><a href='home.php?id=$row[id]&info=delete_member'><i class='fas fa-trash-alt'></i></a></td>";

	}
}else{
	echo "<div class='alert alert-warning'><b>0 result</b></div>";
}
	
}




	
?>