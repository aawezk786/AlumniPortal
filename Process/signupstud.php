<?php
    
    include"../includes/db_conn.php";
    include"../includes/functions.php";
    if(isset($_POST['signup']))
    {
        $name_s = $_POST['name_s'];
        $email_s = $_POST['email_s'];
        $password_s = $_POST['password_s'];
        $ph_no_s = $_POST['ph_no_s'];
        $gender = $_POST['gender'];
        $course = $_POST['course'];
        $enroll = $_POST['enroll'];
        $query = "INSERT INTO requeststud(stud_name,email,student_ph_no,password,stud_gender,stud_course,enrollment) VALUES('$name_s','$email_s','$ph_no_s','$password_s','$gender','$course',$enroll)";
        /*$student_signup = mysqli_query($connection,$query);*/
        if(performQuery($query)){
                echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
                echo "<script>window.open('../index.php','_self')</script>";
            }else{
                echo "<script>alert('Unknown error occured.')</script>";
            }
      

        /*if(!$student_signup)
        {
            echo "<script>alert('Details is already exists')</script>";
            echo "<script>window.open('../index.php','_self')</script>";

        }*/
        /*echo "<script>alert('Registration Successfull')</script>";
        echo "<script>window.open('../index.php','_self')</script>";*/

   
     }  


    
   
    
    

?>