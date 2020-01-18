<?php
include "../includes/db_conn.php";

$subject = $_POST['subject'];
$message = $_POST['Message'];
foreach($_POST['checkBoxArray'] as $cbav)
{
   $query = "SELECT email from alumnis where alumni_id=$cbav";
  $get_mail_query = mysqli_query($connection,$query);
  while($data_fetched = mysqli_fetch_assoc($get_mail_query))
  {
    
    $email = $data_fetched['email'];

    #MAIL CODE


  
require 'aawezmail/aawezAutoload.php';

$mail = new aawez();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "alumniaawez@gmail.com";
  $mail->Password = "aawez123123";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "alumniportal@gmail.com";
  $mail->FromName = "AlumniPortal";
  
  $mail->addAddress($email);
  
  $mail->isHTML(true);
 
  $mail->Subject = $subject;
  $mail->Body = "<b></b>".$message;
  $mail->AltBody = "";

  if(!$mail->send())
  {
   echo "Mail Error: " . $mail->ErrorInfo;
  }
  else
  {
    echo "<script>alert('Send Successfully')</script>";
    echo "<script>window.open('../MeetAlumni.php','_self')</script>";
  }
#}
}}