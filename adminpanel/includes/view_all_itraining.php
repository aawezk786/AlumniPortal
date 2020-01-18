<table class="table table-responsive table-hover table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <!--<th>Category</th>-->
            <th>Name</th>
            <th>Email</th>
            <th>Branch</th>
            <th>Pass Out Year</th>
            <th>Name of Company</th>
            <th>Department for Internship</th>
            <th>Sector</th>
            <th>Description</th>
            <th>No of Students</th>
            <!-- <th colspan="3"><center>Action</center></th> -->
        </tr>
    </thead>
    <tbody>
            <?php

                $query = "SELECT * FROM training";
                $iv_fetched_res = mysqli_query( $connection , $query );
                while($data_fetched = mysqli_fetch_assoc($iv_fetched_res))
                {
                    //viewing contact in table
                    $training_id = $data_fetched['id'];
                    $name = $data_fetched['name'];
                    $email = $data_fetched['email'];
                    $branch = $data_fetched['branch'];
                    $passyear = $data_fetched['passyear'];
                    $name_com = $data_fetched['name_com'];
                    $dept_internship = $data_fetched['dept_internship'];
                    $sector = $data_fetched['sector'];
                    $description = $data_fetched['description'];
                    $no_students = $data_fetched['no_students'];

                    echo '<tr>';
                    
                    echo "<td>{$training_id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$email}</td>";
                    echo "<td>{$branch}</td>";
                    echo "<td>{$passyear}</td>";
                    echo "<td>{$name_com}</td>";
                    echo "<td>{$dept_internship}</td>";
                    echo "<td>{$sector}</td>";
                    echo "<td>{$description}</td>";
                    echo "<td>{$no_students}</td>";
                    echo "<td><a class='btn btn-danger' href='training.php?delete_user={$training_id}' >Delete </a></td>";
                    echo "</tr>";
                
                }

            ?>
            
    </tbody>
</table>

<?php

    #Deleting Posts
    if( isset($_GET['delete_user']) )
    {
        $del_training_id = $_GET['delete_user'];
        $query = "DELETE FROM training WHERE id = {$del_training_id}";
        $del_training_query = mysqli_query( $connection , $query );
        header("Location: training.php");
    }
    
    ?>