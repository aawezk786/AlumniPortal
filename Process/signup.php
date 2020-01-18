<?php

    include"../includes/db_conn.php";
    include"../includes/functions.php";
    if(isset($_POST['signup_alumni']))
    {
        $al_name_s = mysqli_escape_string($connection,$_POST['al_name_s']);
        $al_email_s = mysqli_escape_string($connection,$_POST['al_email_s']);
        $al_password_s =mysqli_escape_string($connection, $_POST['al_password_s']);
        $al_ph_no_s = mysqli_escape_string($connection,$_POST['al_ph_no_s']);
        $al_gender_s = mysqli_escape_string($connection,$_POST['al_gender_s']);
        $al_country  =mysqli_escape_string($connection, $_POST['country']);
        $al_course_s = mysqli_escape_string($connection,$_POST['al_course_s']);
        $al_last_year_s = mysqli_escape_string($connection,$_POST['al_last_year_s']);
        $al_cert_code_s = mysqli_escape_string($connection,$_POST['cert_code']);
        $course_phs = mysqli_escape_string($connection,$_POST['course_status']);
        $institute_phs = mysqli_escape_string($connection,$_POST['institute_status']);
        $company = mysqli_escape_string($connection,$_POST['name_com']);
        $designation = mysqli_escape_string($connection,$_POST['designation']);
        $organisation = mysqli_escape_string($connection,$_POST['name_org']);
        $no_of_employees = mysqli_escape_string($connection,$_POST['no_emp']);
        $turnover = mysqli_escape_string($connection,$_POST['turnover']);
        $other = mysqli_escape_string($connection,$_POST['description']);
        $Status = mysqli_escape_string($connection,$_POST['Status']);
        $img_phs = $_FILES["pic_phs"]["name"];
        $img_job = $_FILES["pic_job"]["name"];
       $query = "INSERT INTO requests(alumni_id, alumni_name, email, alumni_ph_no, password, alumni_gender, country, alumni_course, alumni_last_year, certificate_code, Status, course_phs, institute_phs, company, organisation, designation, no_of_employees, turnover, other, img_phs, img_job, role) VALUES (NULL, '$al_name_s', '$al_email_s', '$al_ph_no_s', '$al_password_s', '$al_gender_s', '$al_country', '$al_course_s', '$al_last_year_s', '$al_cert_code_s', '$Status', '$course_phs', '$institute_phs', '$company', '$organisation','$designation', '$no_of_employees', '$turnover', '$other', '$img_phs', '$img_job','')";
        /*$alumni_signup = mysqli_query($connection,$query);*/
      if(performQuery($query)){
                echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. You can watch your name on Members. Thank you.')</script>";
                echo "<script>window.open('../index.php','_self')</script>";
            }else{
                echo "<script>alert('Unknown error occured.')</script>";
            }
      




if($_FILES["pic_phs"]["name"] != '')
{
     $uploaded_file = $_FILES['pic_phs']['name'];
        /*$uploaded_file_temp = $_FILES['pic_phs']['tmp_name'];
        move_uploaded_file( $uploaded_file_temp , "../uploaded phs/$uploaded_file" );*/
           $errors     = array();
    $maxsize    = 2097152;
    $acceptable = array(
        'image/jpeg',
        'image/jpg',
        'image/png'
    );

    if(($_FILES['pic_phs']['size'] >= $maxsize) || ($_FILES["pic_phs"]["size"] == 0)) {
        $errors[] = 'File too large. File must be less than 2 megabytes.';
    }

    if((!in_array($_FILES['pic_phs']['type'], $acceptable)) && (!empty($_FILES["pic_phs"]["type"]))) {
        $errors[] = 'Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.';
    }

    if(count($errors) === 0) {
        move_uploaded_file($_FILES['pic_phs']['tmp_name'], "../uploaded phs/$uploaded_file");
    } else {
        foreach($errors as $error) {
            echo '<script>alert("'.$error.'");</script>';
        }

        die(); //Ensure no more processing is done
    }
}





        /*$path = "FilesUploaded/".$uploaded_file;*/
    /*$test = explode(".", $_FILES["pic_phs"]["name"]);
    $extension = end($test);
    $name = $test. '.' . $extension;
    $location = '../uploaded phs/' . $name;
    move_uploaded_file($_FILES["pic_phs"]['tmp_name'], $location);*/
    /*echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail"/>;*/


if($_FILES["pic_job"]["name"] != '')
{
     $uploaded_file = $_FILES['pic_job']['name'];
     $target_dir = "../uploaded job";
     $target_file = $target_dir . basename($_FILES["pic_job"]["name"]);
        /*$uploaded_file_temp = $_FILES['pic_phs']['tmp_name'];
        move_uploaded_file( $uploaded_file_temp , "../uploaded phs/$uploaded_file" );*/
           $errors     = array();
    $maxsize    = 2097152;
    $acceptable = array(
        'image/jpeg',
        'image/jpg',
        'image/png'
    );
    /*if ($_FILES["pic_job"]["name"]==$target_file) {
    echo "<script>alert('Sorry')</script>";
    
}
*/
    if(($_FILES['pic_job']['size'] >= $maxsize) || ($_FILES["pic_job"]["size"] == 0)) {
        $errors[] = 'File too large. File must be less than 2 megabytes.';
    }

    if((!in_array($_FILES['pic_job']['type'], $acceptable)) && (!empty($_FILES["pic_job"]["type"]))) {
        $errors[] = 'Invalid file type. Only JPEG, JPG, and PNG types are accepted.';
    }

    if(count($errors) === 0) {
        move_uploaded_file($_FILES['pic_job']['tmp_name'], "../uploaded job/$uploaded_file");
    } else {
        foreach($errors as $error) {
            echo '<script>alert("'.$error.'");</script>';
        }

        die(); //Ensure no more processing is done
    }
}





  /*if(!$alumni_signup)
        {
            echo "<script>alert('Detail is already exist')</script>";
            //echo "<script>window.open('../index.php','_self')</script>";
        }*/
        
      //  echo "<script>window.open('../index.php','_self')</script>";
    }
            /*echo "<script>alert('Registration Successfull')</script>";*/
           // echo "<script>window.open('../index.php','_self')</script>";







?>


<!--
INSERT INTO alumnis (alumni_id, alumni_name, email, alumni_ph_no, password, alumni_gender, country, alumni_course, alumni_last_year, certificate_code, course_phs, institute_phs, company, organisation, designation, no_of_employees, turnover, other, Status) VALUES (NULL, 'bcdshj', 'cfbsdkh@vdfbvh.cndfhjvk', '31232312', 'nckdcsdhchsb', 'Male', 'vfdbvjsb', 'ME', '1234', '1234', 'CE', 'fsdnfkj', '', '', '', '', '', '', 'PHS')


[al_name_s] => Aawez Khan [al_email_s] => aawezk456@gmail.com [al_password_s] => gbfbgggb [al_ph_no_s] => 8108481831 [al_gender_s] => Male [country] => India [al_course_s] => CO [al_last_year_s] => 2003 [cert_code] => 400612 [Status] => Higher_studies_radio [course_status] => CE [institute_status] => vfdvfvd [name_com] => [designation] => [name_org] => [no_emp] => [turnover] => [discription] => [signup_alumni] => Create Account
-->