<table class="table table-responsive table-hover table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <!--<th>Category</th>-->
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <!-- <th colspan="3"><center>Action</center></th> -->
        </tr>
    </thead>
    <tbody>
            <?php

                $query = "SELECT * FROM contact";
                $contact_fetched_res = mysqli_query( $connection , $query );
                while($data_fetched = mysqli_fetch_assoc($contact_fetched_res))
                {
                    //viewing contact in table
                    $contact_id = $data_fetched['contact_id'];
                    $contact_name = $data_fetched['contact_name'];
                    $contact_email = $data_fetched['contact_email'];
                    $contact_subject= $data_fetched['contact_subject'];
                    $contact_message = $data_fetched['contact_message'];
                    echo '<tr>';
                    
                    echo "<td>{$contact_id}</td>";
                    echo "<td>{$contact_name}</td>";
                    echo "<td>{$contact_email}</td>";
                    echo "<td>{$contact_subject}</td>";
                    echo "<td>{$contact_message}</td>";
                    echo "<td><a class='btn btn-danger' href='alumnis.php?delete_user={$contact_id}' >Delete </a></td>";
                    echo "</tr>";
                    /*
                    $query = "SELECT * FROM posts WHERE post_id = $comment_post_id";
                    $post_by_comm_query = mysqli_query( $connection , $query );
                    confirmquery($post_by_comm_query);
                    while($data_fetched = mysqli_fetch_assoc($post_by_comm_query))
                    {
                        $post_id_for_comm = $data_fetched['post_id'];
                        $post_title_for_comm = $data_fetched['post_title'];
                        echo "<td><a href='../post.php?p_id=$post_id_for_comm'>$post_title_for_comm</a></td>";
                    }
                    
                    echo "<td>{$comment_status}</td>";
                    echo "<td>{$comment_date}</td>";
                    echo "<td><a class='btn btn-success' href='comments.php?approve_comm=$comment_id'>Approve</a></td>";
                    echo "<td><a class='btn btn-info' href='comments.php?unapprove_comm=$comment_id'>Unapprove</a></td>";
                    echo "<td><a class='btn btn-danger' href='comments.php?delete_comm=$comment_id'>Delete</a></td>";
                    echo "</tr>";*/
                }

            ?>
            
    </tbody>
</table>

<?php

    #Deleting Posts
    if( isset($_GET['delete_user']) )
    {
        $del_contact_id = $_GET['delete_user'];
        $query = "DELETE FROM contact WHERE contact_id = {$del_contact_id}";
        $del_contact_query = mysqli_query( $connection , $query );
/*        confirmquery($del_contact_query);
*/        header("Location: contacts.php");
    }
    
    ?>