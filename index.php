<?php
      ob_start();
      session_start();
      include"includes/db_conn.php";
      include"includes/header.php";
?>
    <body>
		<header id="home">
<?php 
      include"includes/navmenu.php";
      include"includes/carousel.php";

?>
		</header>
<?php
    #include"includes/progress.php";
    #include"includes/staralumnis.php";
    include"includes/contact.php";
    include"includes/footer.php";
    include"includes/modals.php";
    #include"Profileupdate.php";
?>