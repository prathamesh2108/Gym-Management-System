<div class="container">
    <form class="form-group mt-3" method="post" action="home.php?info=member_search">
        <h3 class="lead">SEARCH MEMBER</h3>
        <input type="text" name="name" class="form-control" placeholder="ENTER MEMBER NAME">
    </form>

    <div class="container">
        <table class="table table-bordered table-hover">
            <tr>
                <th>MEMBER ID </th>
                <th>MEMBER FIRST NAME </th>
                <th>MEMBER LAST NAME</th>
                <th>PHONE</th>
                <th>AGE</th>
                <th>ADDRESS 1</th>
                <th>ADDRESS 2</th>

            </tr>
            <?php
           require('db.php');


$all="SELECT * FROM userjoin";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
			echo "<td>".$row['id']."</td>";
		echo "<td>".$row['f_name']."</td>";
		echo "<td>".$row['l_name']."</td>";
		echo "<td>".$row['phone']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['address1']."</td>";
		echo "<td>".$row['address2']."</td>";
		echo "</tr><br>";
    }
} else {
    echo "0 results";
}



?>

        </table>
    </div>
</div>