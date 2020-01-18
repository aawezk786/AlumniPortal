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
    
    if(isset($_GET['e_id']))
    {
        $edit_event_id = $_GET['e_id'];
    
    
    $query = "SELECT * FROM events WHERE event_id = {$edit_event_id} ";
    $posts_fetched_res_by_id = mysqli_query( $connection , $query );
    while($data_fetched_posts = mysqli_fetch_assoc($posts_fetched_res_by_id))
    {
                        $edit_event_id = $data_fetched_posts['event_id'];
                        $edit_event_title = $data_fetched_posts['event_title'];
                        $edit_event_organizer = $data_fetched_posts['event_organizer'];
                        $edit_event_description = $data_fetched_posts['event_description'];
                        $edit_event_date = $data_fetched_posts['event_date'];
                        $edit_event_time = $data_fetched_posts['event_time'];
                        $edit_event_img = $data_fetched_posts['event_image'];
    }
}
    
    #values from Form - post
    if(isset($_POST['edit_events_submit']))
    {
        $edit_event_title = $_POST['edit_event_title'];
        $edit_event_organizer = $_POST['edit_event_organizer'];
        $edit_event_description = $_POST['edit_event_description'];
        #$add_post_date = date('d-m-y');
        
        #Handling Image
        $edit_event_img = $_FILES['edit_event_img']['name'];
        $edit_event_img_temp = $_FILES['edit_event_img']['tmp_name'];
        move_uploaded_file( $edit_event_img_temp , "images/Events/$edit_event_img" );

        $date = $_POST['date'];
        $time = $_POST['time'];

        #Editing Posts
        $query = "UPDATE events SET ";
        $query .= "event_title = '{$edit_event_title}', ";
        $query .= "event_organizer = '{$edit_event_organizer}', ";
        $query .= "event_description = '{$edit_event_description}', ";
        $query .= "event_date = '{$date}', ";
        $query .= "event_time = '{$time}', ";
        $query .= "event_image = '{$edit_event_img}' ";
        $query .= "WHERE event_id = {$edit_event_id} ";

        $update_event_query = mysqli_query($connection , $query);
        
        confirmquery($update_event_query);
        
        echo "<script>alert('Update successfully')</script>";
    }

    
?>

<form action="" method="post" enctype="multipart/form-data">
    
    <!--<div class="form-group">
        <label for="Post id">Post Id</label>
        <input type="text" name="add_post_id" class="form-control"/>
    </div>-->

<div class="form-group">
        <label for="Event Title">Event Title</label>
        <input type="text" name="edit_event_title" value="<?php echo $edit_event_title; ?>" class="form-control"/>
    </div>
    
    <div class="form-group">
        <label for="Event Organizer">Event Organizer</label>
        <input type="text" name="edit_event_organizer" value="<?php echo $edit_event_organizer; ?>" class="form-control"/>
    </div>
    
    <!--<div class="form-group">
        <label for="Post Date">Post Date</label>
        <input type="text" name="add_post_date" class="form-control"/>
    </div>-->
    
   <div class="form-group">
        <label for="Post Image">Post Image</label>
        <input type="file" name="edit_event_img"/>
        <img width="100" src="images/Events/<?php echo $edit_event_img; ?>" alt="img not found" accept="image/*" />
    </div>
    
    <div class="form-group">
        <label for="Event Description">Event Description</label>
        <!--Modern WYSIWYG-->
         <?php /*include"includes/modernwysiwyg.php";*/ ?>
        <input type="text" name="edit_event_description" value="<?php echo $edit_event_description; ?>" class="form-control" rows="3">
    </div>
    
    <div class="form-group">
        <label for="Event Date and Time">Events Date and Time</label>
        <input type="date" name="date" value="<?php echo $edit_event_date; ?>"/>
        <input type="time" name="time" value="<?php echo $edit_event_time; ?>"/>
    </div>
    <center>
    <input type="submit" class="btn btn-success" value="Update Event" name="edit_events_submit"/>
    <input  type="reset" class="btn btn-primary" value="Reset"/>
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