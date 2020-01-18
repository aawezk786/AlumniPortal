<?php

    include"../includes/db_conn.php";
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $Branch = $_POST['Branch'];
        $passyear = $_POST['PassYear'];
        $name_ind = $_POST['name_ind'];
        $dept = $_POST['Dept'];
        $sector = $_POST['Sector'];
        $package = $_POST['Package'];
        $no_stud = $_POST['nosemployee'];
        $Date = $_POST['Date'];
        $Time = $_POST['Time'];
       
    }

    $query = "INSERT INTO placement(name,email,branch,passyear,name_ind,dept_placement,sector,package,no_students,date,time) VALUES('$name','$email','$Branch','$passyear','$name_ind','$dept','$sector','$package','$no_stud','$Date','$Time')";
    $placement_query = mysqli_query($connection,$query);
    echo "<script>alert('Submit successfully')</script>";
   echo "<script>window.open('../index.php','_self')</script>";

?>