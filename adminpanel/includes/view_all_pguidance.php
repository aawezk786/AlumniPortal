<table class="table table-responsive table-hover table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <!--<th>Category</th>-->
            <th>Name</th>
            <th>Email</th>
            <th>Branch</th>
            <th>Pass Out Year</th>
            <th>Department for Guidance</th>
            <th>Domain</th>
            <!-- <th colspan="3"><center>Action</center></th> -->
        </tr>
    </thead>
    <tbody>
            <?php

                $query = "SELECT * FROM project_guidance";
                $pguidance_fetched_res = mysqli_query( $connection , $query );
                while($data_fetched = mysqli_fetch_assoc($pguidance_fetched_res))
                {
                    //viewing contact in table
                    $pguidance_id = $data_fetched['id'];
                    $name = $data_fetched['name'];
                    $email = $data_fetched['email'];
                    $branch = $data_fetched['branch'];
                    $passyear = $data_fetched['passyear'];
                    $dept_guidance = $data_fetched['dept_guidance'];
                    $domain = $data_fetched['domain'];

                    echo '<tr>';
                    
                    echo "<td>{$pguidance_id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$email}</td>";
                    echo "<td>{$branch}</td>";
                    echo "<td>{$passyear}</td>";
                    echo "<td>{$dept_guidance}</td>";
                    echo "<td>{$domain}</td>";
                    echo "<td><a class='btn btn-danger' href='pguidance.php?delete_user={$pguidance_id}' >Delete </a></td>";
                    echo "</tr>";
                
                }

            ?>
            
    </tbody>
</table>

<?php

    #Deleting Posts
    if( isset($_GET['delete_user']) )
    {
        $del_pguidance_id = $_GET['delete_user'];
        $query = "DELETE FROM project_guidance WHERE id = {$del_pguidance_id}";
        $del_pguidance_query = mysqli_query( $connection , $query );
        header("Location: pguidance.php");
    }
    
    ?>