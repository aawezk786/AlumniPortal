<?php
include"../includes/db_conn.php";
if(isset($_POST['submit_forget']))
{
	$email = $_POST['email'];
    $currpass = $_POST['currentpw'];
    $newpass = $_POST['newpw'];
    $role = $_POST['role'];

     if($role == "Alumni")
     {
     	  $query = "UPDATE alumnis SET password = '$newpass' WHERE email = '$email' AND password = '$currpass'";
	     $forget = mysqli_query($connection,$query);
	     if(!$forget)
	     {
	     	die("Query Failed");
	     }
	     echo "<script>alert('Your Password Has been changed')</script>";
	     echo "<script>window.open('../index.php','_self')</script>";
     }
     else if($role == "Student")
     {
     	  $query = "UPDATE students SET password = '$newpass' WHERE email = '$email' AND password = '$currpass'";
	     $forget = mysqli_query($connection,$query);
	     if(!$forget)
	     {
	     	die("Query Failed");
	     }
	     echo "<script>alert('Your Password Has been changed')</script>";
	     echo "<script>window.open('../index.php','_self')</script>";

     }

}

?>