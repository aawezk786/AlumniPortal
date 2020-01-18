<table class="table table-responsive table-hover table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <!--<th>Category</th>-->
            <th>Name</th>
            <th>Email</th>
            <th>Branch</th>
            <th>Pass Out Year</th>
            <th>Description</th>
            <!-- <th colspan="3"><center>Action</center></th> -->
        </tr>
    </thead>
    <tbody>
            <?php

                $query = "SELECT * FROM any_other";
                $anyother_fetched_res = mysqli_query( $connection , $query );
                while($data_fetched = mysqli_fetch_assoc($anyother_fetched_res))
                {
                    //viewing contact in table
                    $anyother_id = $data_fetched['id'];
                    $name = $data_fetched['name'];
                    $email = $data_fetched['email'];
                    $branch = $data_fetched['branch'];
                    $passyear = $data_fetched['passyear'];
                    $description = $data_fetched['description'];

                    echo '<tr>';
                    
                    echo "<td>{$anyother_id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$email}</td>";
                    echo "<td>{$branch}</td>";
                    echo "<td>{$passyear}</td>";
                    echo "<td>{$description}</td>";
                    echo "<td><a class='btn btn-danger' href='anyother.php?delete_user={$anyother_id}' >Delete </a></td>";
                    echo "</tr>";
                
                }

            ?>
            
    </tbody>
</table>

<?php

    #Deleting Posts
    if( isset($_GET['delete_user']) )
    {
        $del_anyother_id = $_GET['delete_user'];
        $query = "DELETE FROM any_other WHERE id = {$del_anyother_id}";
        $del_anyother_query = mysqli_query( $connection , $query );
        /*confirmquery($del_anyother_query);*/
        header("Location: anyother.php");
    }
    
    ?>