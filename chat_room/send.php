<?php
include("config.php");
if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 die("<script>window.location.reload()</script>");
}
if(isset($_SESSION['user']) && isset($_POST['msg'])){
 $msg=htmlspecialchars($_POST['msg']);
 if($msg!=""){
  $sql=$dbh->prepare("INSERT INTO messages (name,msg,posted) VALUES (?,?,NOW())");
  $sql->execute(array($_SESSION['user'],$msg));
 }
}
?>
