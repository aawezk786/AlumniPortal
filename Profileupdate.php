<?php
	  ob_start();
      session_start();
include"includes/db_conn.php";
if(isset($_POST['update_profile']))
{
	$email = $_POST['email_update'];
    $phone = $_POST['ph_no_update'];
    $country = $_POST['country'];
    $role = $_POST['role'];
    $alumni_id = $_SESSION['alumni_id_session'];
    $stud_id = $_SESSION['stud_id_session'];

     if($role == "Alumni")
     {
     	   $query = "UPDATE alumnis SET email='$email',alumni_ph_no=$phone,country='$country' WHERE alumni_id=$alumni_id";
	     $update_alumni = mysqli_query($connection,$query);
	     if(!$update_alumni)
	     {
	     	die("Query Failed");
	     }
	     echo "<script>alert('Update Successfully')</script>";
	     echo "<script>window.open('index.php','_self')</script>";
     }
      else if($role == "Student")
     {
     	  $query = "UPDATE students SET email='$email',student_ph_no=$phone WHERE stud_id=$stud_id";
	     $update_student = mysqli_query($connection,$query);
	     if(!$update_student)
	     {
	     	die("Query Failed");
	     }
	     echo "<script>alert('Update Successfully')</script>";
	     echo "<script>window.open('index.php','_self')</script>";

     }

}


//UPDATE alumnis SET email='zewaa@gmail.com',alumni_ph_no=12121212 WHERE alumni_id=2
?>
     