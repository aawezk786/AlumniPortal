<?php

    include"../includes/db_conn.php";
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $Branch = $_POST['Branch'];
        $Audience = $_POST['Audience'];
        $InterestedTopic = $_POST['InterestedTopic'];
        $PassYear = $_POST['PassYear'];
        $Date = $_POST['Date'];
        $Time = $_POST['Time'];
        $dept = $_POST['Dept'];
    }

    $query = "INSERT INTO expert(expert_name,expert_email,expert_branch,expert_audience,expert_topic,expert_passyear,expert_date,expert_time,dept_talk) VALUES('$name','$email','$Branch','$Audience','$InterestedTopic','$PassYear','$Date','$Time','$dept')";
    $expert_query = mysqli_query($connection,$query);
    echo "<script>alert('Submit successfully')</script>";
    echo "<script>window.open('../index.php','_self')</script>";

?>