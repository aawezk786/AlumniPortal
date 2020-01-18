<?php
include("config.php");
echo "<h2>Users</h2>";
$sql=$dbh->prepare("SELECT name FROM chatters");
$sql->execute();
while($r=$sql->fetch()){
 echo "<div class='user'>{$r['name']}</div>";
}
?>
