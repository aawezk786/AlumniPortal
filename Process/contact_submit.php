<?php

    include"../includes/db_conn.php";
    if(isset($_POST['submit_contact']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    }

    $query = "INSERT INTO contact(contact_name,contact_email,contact_subject,contact_message) VALUES('$name','$email','$subject','$message')";
    $contact_query = mysqli_query($connection,$query);
    echo "<script>alert('THANKS FOR THE FEEDBACK')</script>";
    echo "<script>window.open('../index.php','_self')</script>";

?>