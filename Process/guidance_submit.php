<?php

    include"../includes/db_conn.php";
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $Branch = $_POST['Branch'];
        $PassYear = $_POST['PassYear'];
        $dept = $_POST['Dept'];
        $domain = $_POST['domain'];
    }

    $query = "INSERT INTO project_guidance(name,email,branch,passyear,dept_guidance,domain) VALUES('$name','$email','$Branch','$PassYear','$dept','$domain')";
    $expert_query = mysqli_query($connection,$query);
    echo "<script>alert('Submit successfully')</script>";
    echo "<script>window.open('../index.php','_self')</script>";

?>