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
            <th>Target audience</th>
            <th>No of audience</th>
            <th>Department for Industrial Visit</th>
            <th>Date</th>
            <th>Time</th>
            <!-- <th colspan="3"><center>Action</center></th> -->
        </tr>
    </thead>
    <tbody>
            <?php

                $query = "SELECT * FROM industrialvisit";
                $iv_fetched_res = mysqli_query( $connection , $query );
                while($data_fetched = mysqli_fetch_assoc($iv_fetched_res))
                {
                    //viewing contact in table
                    $iv_id = $data_fetched['id'];
                    $name = $data_fetched['name'];
                    $email = $data_fetched['email'];
                    $branch = $data_fetched['branch'];
                    $passyear = $data_fetched['passyear'];
                    $name_ind = $data_fetched['name_ind'];
                    $audience = $data_fetched['audience'];
                    $no_audience = $data_fetched['no_audience'];
                    $dept_iv = $data_fetched['dept_iv'];
                    $date = $data_fetched['date'];
                    $time = $data_fetched['time'];

                    echo '<tr>';
                    
                    echo "<td>{$iv_id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$email}</td>";
                    echo "<td>{$branch}</td>";
                    echo "<td>{$passyear}</td>";
                    echo "<td>{$name_ind}</td>";
                    echo "<td>{$audience}</td>";
                    echo "<td>{$no_audience}</td>";
                    echo "<td>{$dept_iv}</td>";
                    echo "<td>{$date}</td>";
                    echo "<td>{$time}</td>";
                    echo "<td><a class='btn btn-danger' href='i_v.php?delete_user={$iv_id}' >Delete </a></td>";
                    echo "</tr>";
                
                }

            ?>
            
    </tbody>
</table>

<?php

    #Deleting Posts
    if( isset($_GET['delete_user']) )
    {
        $del_iv_id = $_GET['delete_user'];
        $query = "DELETE FROM industrialvisit WHERE id = {$del_iv_id}";
        $del_iv_query = mysqli_query( $connection , $query );
        
        header("Location: i_v.php");
    }
    
    ?>