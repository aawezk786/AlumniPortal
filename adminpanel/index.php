<?php
include"includes/admin_header.php";
include"includes/db_conn.php";

if( $_SESSION['role'] == 'admin' )
{#if start

?>
         <body>

            <div id="wrapper">

            <!-- Navigation -->
                <?php include"includes/admin_navigation.php"; ?>

                <div id="page-wrapper">

                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    Welcome To Admin
                                    <small><?php echo $_SESSION['alumni_name_session']; ?></small>
                                </h1>
                            </div>
                        </div>
                        <!-- /.row -->
                        <?php include"admin_widgets.php"; ?>
                        
                    </div>
                    <!-- /.container-fluid -->

                </div>
    <?php           #page-wrapper
}
else
{
    header("Location: ../index.php");
}
     include"includes/admin_footer.php"; ?>


<?php
#if ends

    //header("Location: ../index.php");
   /* echo "<h1>Session Error in if condition</h1>";*/

?>