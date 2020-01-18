<?php include("config.php");include("login.php");?>
<!DOCTYPE html>
<html>
 <head>
  <script src="//code.jquery.com/jquery-latest.js"></script>
  <script src="chat.js"></script>
  <link href="chat.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../css/bootstrap.min.css"/>
  <title>Anonymous Group ChatRoom</title>
 </head>
 <body class="container">
  <div id="content" style="margin-top:10px;height:100%;">
   <center><h1>Start Group Chat</h1></center>
   <div class="chat col-sm-12">
    <div class="users">
     <?php include("users.php");?>
    </div>
    <div class="chatbox">
     <?php
     if(isset($_SESSION['user'])){
      include("chatbox.php");
     }else{
      $display_case=true;
      include("login.php");
     }
     ?>
    </div>
   </div>
  </div>
 </body>
</html>
