   <?php include"includes/admin_header.php"; ?>
<?php 
if( $_SESSION['role'] == 'admin' )
{#if start
?>

<body>

    <div id="wrapper">
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Events Section
                        </h1>
        <!-- Navigation -->
        <?php include"includes/admin_navigation.php"; ?>

    <?php
    
    if( isset($_POST['add_events_submit']) )
    {
        #$add_post_id = $_POST['add_post_id'];
        $add_event_title = $_POST['add_event_title'];
        $add_event_organizer = $_POST['add_event_organizer'];
        $add_event_description = $_POST['add_event_description'];
        #$add_post_date = date('d-m-y');
        
        #Handling Image
        $add_event_img = $_FILES['add_event_img']['name'];
        $add_event_img_temp = $_FILES['add_event_img']['tmp_name'];
        move_uploaded_file( $add_event_img_temp , "images/Events/$add_event_img" );

        $date = $_POST['date'];
        $time = $_POST['time'];
        
        $query = "INSERT INTO events(event_title,event_organizer,event_description,event_date,event_time,event_image) ";
        $query .= "VALUES( '{$add_event_title}' , '{$add_event_organizer}' , '{$add_event_description}' , '{$date}' , '{$time}' , '{$add_event_img}' )";
        
        $add_events_query = mysqli_query( $connection , $query );
        
        confirmquery($add_events_query);
        echo "<script>alert('Submit successfully')</script>";
        
    }
    /*if(!$add_events_query)
    {

    }
    */
?>

<form action="" method="post" enctype="multipart/form-data">
    
    <!--<div class="form-group">
        <label for="Post id">Post Id</label>
        <input type="text" name="add_post_id" class="form-control"/>
    </div>-->
   
    
    <div class="form-group">
        <label for="Event Title">Event Title</label>
        <input type="text" name="add_event_title" class="form-control"/>
    </div>
    
    <div class="form-group">
        <label for="Event Organizer">Event Organizer</label>
        <input type="text" name="add_event_organizer" class="form-control"/>
    </div>
    
    <!--<div class="form-group">
        <label for="Post Date">Post Date</label>
        <input type="text" name="add_post_date" class="form-control"/>
    </div>-->
    
    <div class="form-group">
        <label for="Event Image">Event Image</label>
        <input type="file" name="add_event_img" accept="image/*" />
    </div>
    
    <div class="form-group">
        <label for="Event Description">Event Description</label>
        <!--Modern WYSIWYG-->
         <?php /*include"includes/modernwysiwyg.php";*/ ?>
        <textarea name="add_event_description" class="form-control" rows="3"></textarea>
    </div>
    
    <div class="form-group">
        <label for="Event Date and Time">Events Date and Time</label>
        <input type="date" name="date" />
        <input type="time" name="time" />
    </div>
    <center>
    <input type="submit" class="btn btn-success" value="Add Events" name="add_events_submit"/>
</center>
    
</form> 
            
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