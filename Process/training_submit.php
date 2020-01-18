<?php

    include"../includes/db_conn.php";
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $Branch = $_POST['Branch'];
        $PassYear = $_POST['PassYear'];
        $name_com = $_POST['name_com'];
        $dept = $_POST['Dept'];
        $sector = $_POST['Sector'];
        $desc = $_POST['description'];
        $no_stud = $_POST['nosstudent'];
    }

    $query = "INSERT INTO training(name,email,branch,passyear,name_com,dept_internship,sector,description,no_students) VALUES('$name','$email','$Branch','$PassYear','$name_com','$dept','$sector',' $desc','$no_stud')";
    $training_query = mysqli_query($connection,$query);
    echo "<script>alert('Submit successfully')</script>";
    echo "<script>window.open('../index.php','_self')</script>";

?>