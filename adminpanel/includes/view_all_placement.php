<table class="table table-responsive table-hover table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <!--<th>Category</th>-->
            <th>Name</th>
            <th>Email</th>
            <th>Branch</th>
            <th>Pass Out Year</th>
            <th>Name of Industry</th>
            <th>Department for Placement</th>
            <th>Sector</th>
            <th>Package</th>
            <th>No of Students</th>
            <th>Date</th>
            <th>Time</th>
            <!-- <th colspan="3"><center>Action</center></th> -->
        </tr>
    </thead>
    <tbody>
            <?php

                $query = "SELECT * FROM placement";
                $placement_fetched_res = mysqli_query( $connection , $query );
                while($data_fetched = mysqli_fetch_assoc($placement_fetched_res))
                {
                    //viewing contact in table
                    $placement_id = $data_fetched['id'];
                    $name = $data_fetched['name'];
                    $email = $data_fetched['email'];
                    $branch = $data_fetched['branch'];
                    $passyear = $data_fetched['passyear'];
                    $name_ind = $data_fetched['name_ind'];
                    $dept_placement = $data_fetched['dept_placement'];
                    $sector = $data_fetched['sector'];
                    $package = $data_fetched['package'];
                    $date = $data_fetched['date'];
                    $time = $data_fetched['time'];

                    echo '<tr>';
                    
                    echo "<td>{$placement_id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$email}</td>";
                    echo "<td>{$branch}</td>";
                    echo "<td>{$passyear}</td>";
                    echo "<td>{$name_ind}</td>";
                    echo "<td>{$dept_placement}</td>";
                    echo "<td>{$sector}</td>";
                    echo "<td>{$package}</td>";
                    echo "<td>{$date}</td>";
                    echo "<td>{$time}</td>";
                    echo "<td><a class='btn btn-danger' href='placement.php?delete_user={$placement_id}' >Delete </a></td>";
                    echo "</tr>";
                
                }

            ?>
            
    </tbody>
</table>

<?php

    #Deleting Posts
    if( isset($_GET['delete_user']) )
    {
        $del_placement_id = $_GET['delete_user'];
        $query = "DELETE FROM placement WHERE id = {$del_placement_id}";
        $del_placement_query = mysqli_query( $connection , $query );
        header("Location: placement.php");
    }
    
    ?>