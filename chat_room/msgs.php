<?php
include("config.php");
$sql=$dbh->prepare("SELECT * FROM messages");
$sql->execute();
while($r=$sql->fetch()){
 echo "<div class='msg' title='{$r['posted']}'><span class='name'>{$r['name']}</span> : <span class='msgc'>{$r['msg']}</span></div>";
}
if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 echo "<script>window.location.reload()</script>";
}
?>
