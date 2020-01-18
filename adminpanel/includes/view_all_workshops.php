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
            <th>No of audience</th>
            <th>Department for workshop</th>
            <th>Date</th>
            <th>Time</th>
            <!-- <th colspan="3"><center>Action</center></th> -->
        </tr>
    </thead>
    <tbody>
            <?php

                $query = "SELECT * FROM workshop";
                $workshop_fetched_res = mysqli_query( $connection , $query );
                while($data_fetched = mysqli_fetch_assoc($workshop_fetched_res))
                {
                    //viewing contact in table
                    $workshop_id = $data_fetched['id'];
                    $name = $data_fetched['name'];
                    $email = $data_fetched['email'];
                    $branch= $data_fetched['branch'];
                    $passyear = $data_fetched['passyear'];
                    $topic = $data_fetched['topic'];
                    $audience = $data_fetched['audience'];
                    $no_audience = $data_fetched['no_audience'];
                    $dept_workshop = $data_fetched['dept_workshop'];
                    $workshop_date = $data_fetched['workshop_date'];
                    $workshop_time = $data_fetched['workshop_time'];

                    echo '<tr>';
                    
                    echo "<td>{$workshop_id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$email}</td>";
                    echo "<td>{$branch}</td>";
                    echo "<td>{$passyear}</td>";
                    echo "<td>{$topic}</td>";
                    echo "<td>{$audience}</td>";
                    echo "<td>{$no_audience}</td>";
                    echo "<td>{$dept_workshop}</td>";
                    echo "<td>{$workshop_date}</td>";
                    echo "<td>{$workshop_time}</td>";
                    echo "<td><a class='btn btn-danger' href='workshop.php?delete_user={$workshop_id}' >Delete </a></td>";
                    echo "</tr>";
                
                }

            ?>
            
    </tbody>
</table>

<?php

    #Deleting Posts
    if( isset($_GET['delete_user']) )
    {
        $del_workshop_id = $_GET['delete_user'];
        $query = "DELETE FROM workshop WHERE id = {$del_workshop_id}";
        $del_workshop_query = mysqli_query( $connection , $query );
        header("Location: workshop.php");
    }
    
    ?>