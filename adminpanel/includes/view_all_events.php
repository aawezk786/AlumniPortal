
   


    <table class="table table-responsive table-bordered table-hover">
       
    
       
       
        <thead>
            <tr>
                
                <th>Id</th>
                <!--<th>Category</th>-->
                <th>Event Title</th>
                <th>Event Organizer</th>
                <th>Event Description</th>
                <th>Date</th>
                <th>Time</th>
                <th>Image</th>
                <th colspan="2"><center>Action</center></th>
            </tr>
        </thead>
        <tbody>

                <?php

                    $query = "SELECT * FROM events";
                    $events_fetched_res = mysqli_query( $connection , $query );
                    while($data_fetched_posts = mysqli_fetch_assoc($events_fetched_res))
                    {
                        $event_id = $data_fetched_posts['event_id'];
                        $event_title = $data_fetched_posts['event_title'];
                        $event_organizer = $data_fetched_posts['event_organizer'];
                        $event_description = $data_fetched_posts['event_description'];
                        $event_date = $data_fetched_posts['event_date'];
                        $event_time = $data_fetched_posts['event_time'];
                        $event_image = $data_fetched_posts['event_image'];
                        echo '<tr>';
                        ?>
                        
                        <?php

                        #**** category
                        /*$query = "SELECT * FROM categories";
                        $select_all_cats_for_post = mysqli_query( $connection , $query );
                        confirmquery($select_all_cats_for_post);

                        while($data_fetched = mysqli_fetch_assoc($select_all_cats_for_post))
                        {
                        $cat_id = $data_fetched['cat_id'];
                        $post_cat_title = $data_fetched['cat_title'];
                        echo "<td>{$post_cat_title}</td>";
                        }*/

                        echo "<td>{$event_id}</td>";
                        echo "<td>{$event_title}</td>";
                        echo "<td>{$event_organizer}</td>";
                        echo "<td>{$event_description}</td>";
                        echo "<td>{$event_date}</td>";
                        echo "<td>{$event_time}</td>";
                        echo "<td><img alt='img missing' width=50 src='images/Events/{$event_image}' /></td>";
                        echo "<td><a class='btn btn-info' href='edit_events.php?e_id={$event_id}'>Edit</a></td>";
                        echo "<td><a class='btn btn-danger' onClick=\"javascript: return confirm('Are You Sure You Want to Delete Post');\" href='Events.php?delete_events={$event_id}' >Delete</a></td>";
                        echo "</tr>";
                    }

                ?>

<!-- 'Events.php?source=edit_events&e_id={$event_id} -->
        </tbody>
    </table>
    <center>
    <a href="add_events.php" class="btn btn-primary">Add New</a>
</center>



<?php

    #Deleting Posts
    if( isset($_GET['delete_events']) )
    {
        $del_events_id = $_GET['delete_events'];
        $query = "DELETE FROM events WHERE event_id = {$del_events_id}";
        $del_events_query = mysqli_query( $connection , $query );
/*        confirmquery($del_events_query);
*/        header("Location: Events.php");
    }
    
?>