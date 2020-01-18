<?php include"includes/admin_header.php"; ?>
<?php 
if( $_SESSION['role'] == 'admin' )
{#if start
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include"includes/admin_navigation.php"; ?>
        <script src="includes/tinymce/tinymcenested/tinymce.min.js"></script>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Events Section
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
                                /*case 'add_post':
                                    include "includes/add_events.php";
                                    break;
                                    
                                case 'edit_post':
                                    include "includes/edit_events.php";
                                    break;
*/
                                default:
                                    include "includes/view_all_events.php";
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