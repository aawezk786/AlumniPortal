<?php

    include"../includes/db_conn.php";
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $Branch = $_POST['Branch'];
        $passyear = $_POST['PassYear'];
        $name_ind = $_POST['name_ind'];
        $Audience = $_POST['Audience'];
        $dept = $_POST['Dept'];
        $count = $_POST['count'];
        $Date = $_POST['Date'];
        $Time = $_POST['Time'];
       
    }

    $query = "INSERT INTO industrialvisit(name,email,branch,passyear,name_ind,audience,dept_iv,no_audience,date,time) VALUES('$name','$email','$Branch','$passyear','$name_ind','$Audience','$dept','$count','$Date','$Time')";
    $iv_query = mysqli_query($connection,$query);
    echo "<script>alert('Submit successfully')</script>";
   echo "<script>window.open('../index.php','_self')</script>";

?>