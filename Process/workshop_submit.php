<?php

    include"../includes/db_conn.php";
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $Branch = $_POST['Branch'];
        $Audience = $_POST['Audience'];
        $nos_audience = $_POST['count'];
        $Topic = $_POST['InterestedTopic'];
        $PassYear = $_POST['PassYear'];
        $Date = $_POST['Date'];
        $Time = $_POST['Time'];
        $dept = $_POST['Dept'];
    }

    $query = "INSERT INTO workshop(name,email,branch,audience,no_audience,topic,passyear,workshop_date,workshop_time,dept_workshop) VALUES('$name','$email','$Branch','$Audience','$nos_audience','$Topic','$PassYear','$Date','$Time','$dept')";
    $workshop_query = mysqli_query($connection,$query);
    echo "<script>alert('Submit successfully')</script>";
   echo "<script>window.open('../index.php','_self')</script>";

?>