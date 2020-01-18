<?php

    include"../includes/db_conn.php";
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $Branch = $_POST['Branch'];
        $PassYear = $_POST['PassYear'];
        $desc = $_POST['description'];
    }

    $query = "INSERT INTO any_other(name,email,branch,passyear,description) VALUES('$name','$email','$Branch','$PassYear','$desc')";
    $training_query = mysqli_query($connection,$query);
    echo "<script>alert('Submit successfully')</script>";
    echo "<script>window.open('../index.php','_self')</script>";

?>