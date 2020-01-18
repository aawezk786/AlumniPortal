<?php include"includes/admin_header.php"; ?>
<?php 

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
                            Expert Talk Section
                        </h1>
                        
                        <!--Table HEre-->
                        
                        <?php
                            if(isset($_GET['source']))
                            {
                                $source = $_GET['source'];
                                
                            }
                            else
                            {
                                $source='';
                            }
                        
                            switch($source)
                            {
                                case 'null':
                                    ////empty
                                    break;

                                default:
                                    include "includes/view_all_experttalks.php";
                                    break;
                            }
                        ?>
                        
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


<?php
}
else
{
    header("Location: ../index.php");
}
include"includes/admin_footer.php"; ?>