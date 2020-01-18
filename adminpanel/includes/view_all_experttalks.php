<table class="table table-responsive table-hover table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <!--<th>Category</th>-->
            <th>Name</th>
            <th>Email</th>
            <th>Branch</th>
            <th>Pass Out Year</th>
            <th>Topic</th>
            <th>Target audience</th>
            <th>Department for talk</th>
            <th>Date</th>
            <th>Time</th>
            <!-- <th colspan="3"><center>Action</center></th> -->
        </tr>
    </thead>
    <tbody>
            <?php

                $query = "SELECT * FROM expert";
                $expert_fetched_res = mysqli_query( $connection , $query );
                while($data_fetched = mysqli_fetch_assoc($expert_fetched_res))
                {
                    //viewing contact in table
                    $expert_id = $data_fetched['expert_id'];
                    $expert_name = $data_fetched['expert_name'];
                    $expert_email = $data_fetched['expert_email'];
                    $expert_branch= $data_fetched['expert_branch'];
                    $expert_passyear = $data_fetched['expert_passyear'];
                    $expert_topic = $data_fetched['expert_topic'];
                    $expert_audience = $data_fetched['expert_audience'];
                    $dept_talk = $data_fetched['dept_talk'];
                    $expert_date = $data_fetched['expert_date'];
                    $expert_time = $data_fetched['expert_time'];

                    echo '<tr>';
                    
                    echo "<td>{$expert_id}</td>";
                    echo "<td>{$expert_name}</td>";
                    echo "<td>{$expert_email}</td>";
                    echo "<td>{$expert_branch}</td>";
                    echo "<td>{$expert_passyear}</td>";
                    echo "<td>{$expert_topic}</td>";
                    echo "<td>{$expert_audience}</td>";
                    echo "<td>{$dept_talk}</td>";
                    echo "<td>{$expert_date}</td>";
                    echo "<td>{$expert_time}</td>";
                    echo "<td><a class='btn btn-danger' href='Expert.php?delete_user={$expert_id}' >Delete </a></td>";
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
        $del_expert_id = $_GET['delete_user'];
        $query = "DELETE FROM expert WHERE expert_id = {$del_expert_id}";
        $del_expert_query = mysqli_query( $connection , $query );
        /*confirmquery($del_expert_query);*/
        header("Location: Expert.php");
    }
    
    ?>