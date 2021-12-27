<?php

require('db.php');

$errors = array(); 
if (isset($_REQUEST['userjoin'])) {
  $f_name = mysqli_real_escape_string($conn, $_REQUEST['f_name']);
  $l_name = mysqli_real_escape_string($conn, $_REQUEST['l_name']);
  $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
  $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
   $address1 = mysqli_real_escape_string($conn, $_REQUEST['address1']);
   $address2 = mysqli_real_escape_string($conn, $_REQUEST['address2']);
  if (count($errors) == 0) {
    $query = "INSERT INTO userjoin (f_name,l_name,phone,age,address1,address2) 
          VALUES('$f_name','$l_name','$phone','$age','$address1','$address2')";
    $sql=mysqli_query($conn, $query);
    if ($sql) {
    $msg="<div class='alert alert-success'><b>Member added successfully</b></div>";
    }else{
      $msg="<div class='alert alert-warning'><b>Member not added</b></div>";
    }
  }
}



?>






<div class="container">
    <form class="form-group mt-3" method="POST">
        <div>
            <h3>ADD USER</h3>
        </div>
        <?php include('errors.php'); 
    echo @$msg;

    ?>
        <label class="mt-3">MEMBER FIRST NAME</label>
        <input type="text" name="f_name" class="form-control">
        <label class="mt-3">MEMBER LAST NAME</label>
        <input type="text" name="l_name" class="form-control">
        <label class="mt-3">MEMBER PHONE NUMBER</label>
        <input type="text" name="phone" class="form-control">
        <label class="mt-3">MEMBER AGE</label>
        <input type="text" name="age" class="form-control">
        <label class="mt-3">MEMBER ADDRESS1</label>
        <input type="text" name="address1" class="form-control">
        <label class="mt-3">MEMBER ADDRESS2</label>
        <input type="text" name="address2" class="form-control">
        <button class="btn btn-dark mt-3" type="submit" name="userjoin">ADD</button>
    </form>
</div>