<?php
session_start();
include("config.php");
$sql=$dbh->prepare("DELETE FROM chatters WHERE name=?");
$sql->execute(array($_SESSION['user']));
session_destroy();
header("Location: index.php");
?>
