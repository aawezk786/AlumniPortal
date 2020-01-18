<?php

    session_start();
    include"../includes/db_conn.php";
    if(isset($_POST['login']))
    {
        $useremail =mysqli_escape_string($connection,$_POST['email_l']);
        $userpass = mysqli_escape_string($connection,$_POST['password_l']);
        $role = $_POST['role'];
        
        if($role == "Alumni")
        {
            $query = "SELECT * FROM alumnis WHERE email='$useremail' AND password='$userpass'";
            $login_query = mysqli_query($connection,$query);
            comfirmquery($login_query);
           /*$email = mysqli_escape_string($connection,$query);
            $userpass = mysqli_escape_string($connection,$userpass);*/
            if(mysqli_num_rows($login_query) > 0)
            {
                while($data_fetched = mysqli_fetch_assoc($login_query))
                {   
                    $alumni_id = $data_fetched['alumni_id'];
                    $alumni_name = $data_fetched['alumni_name'];
                    $alumni_email = $data_fetched['email'];
                    $alumni_ph_no = $data_fetched['alumni_ph_no'];
                    $alumni_gender = $data_fetched['alumni_gender'];
                    $alumni_course = $data_fetched['alumni_course'];
                    $country = $data_fetched['country'];
                    $role = $data_fetched['role'];
                    $_SESSION['alumni_id_session'] = $alumni_id;
                    $_SESSION['alumni_name_session'] = $alumni_name;
                    $_SESSION['email_session'] = $alumni_email;
                    $_SESSION['alumni_ph_no_session'] = $alumni_ph_no;
                    $_SESSION['alumni_gender_session'] = $alumni_gender;
                    $_SESSION['alumni_course_session'] = $alumni_course;
                    $_SESSION['country_session'] = $country;
                    $_SESSION['role'] = $role;
                }
            }
            else
            {
                echo "<script>alert('INVALID CREDENTIALS')</script>";
            }
            echo "<script>window.open('../index.php','_self')</script>";
        }
        else if($role == "Student")
        {
            $query = "SELECT * FROM students WHERE email='$useremail' AND password='$userpass'";
            $login_query = mysqli_query($connection,$query);
            comfirmquery($login_query);
            if(mysqli_num_rows($login_query) > 0)
            {
                while($data_fetched = mysqli_fetch_assoc($login_query))
                {
                    $stud_id = $data_fetched['stud_id'];
                    $stud_name = $data_fetched['stud_name'];
                    $stud_email = $data_fetched['email'];
                    $stud_ph_no = $data_fetched['student_ph_no'];
                    $stud_gender = $data_fetched['stud_gender'];
                    $stud_course = $data_fetched['stud_course'];
                    $enroll = $data_fetched['enrollment'];
                    $_SESSION['stud_id_session'] = $stud_id;
                    $_SESSION['stud_name_session'] = $stud_name;
                    $_SESSION['email_session'] = $stud_email;
                    $_SESSION['student_ph_no_session'] = $stud_ph_no;
                    $_SESSION['stud_gender_session'] = $stud_gender;
                    $_SESSION['stud_course_session'] = $stud_course;
                    $_SESSION['enrollment_session'] = $enroll;
                }
            }
            else
            {
                echo "<script>alert('INVALID CREDENTIALS')</script>";
            }
            echo "<script>window.open('../index.php','_self')</script>";
        }
    }
    else
    {
        header("Location: ../index.php");
    }
?>