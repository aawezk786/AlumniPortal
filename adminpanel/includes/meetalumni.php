<?php
/*if( (isset($_POST['submit'])) and (isset($_POST['checkBoxArray'])) )*/


?>
<table class="table table-responsive table-hover">
    <thead>
        <form action="mail/mail.php" method="post">
        <tr>
            <th><input type="checkbox" id="selectAllBoxes" /></th>
            <th>Id</th>
            <!--<th>Category</th>-->
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            
           <!--  <th>Course Phs</th>
            <th>Institute Phs</th>
            <th>Company</th>
            <th>Organization</th>
            <th>Designation</th> -->
            
        </tr>
    </thead>
    <tbody>
           
            <?php

                $query = "SELECT * FROM alumnis";
                $alumni_fetched = mysqli_query( $connection , $query );
                while($data_fetched = mysqli_fetch_assoc($alumni_fetched))
                {
                    $alumni_id = $data_fetched['alumni_id'];
                    $alumni_name = $data_fetched['alumni_name'];
                    $alumni_email = $data_fetched['email'];
                    $alumni_ph_no = $data_fetched['alumni_ph_no'];
                    $password = $data_fetched['password'];
                    $alumni_gender = $data_fetched['alumni_gender'];
                    $alumni_course = $data_fetched['alumni_course'];
                    $alumni_last_year = $data_fetched['alumni_last_year'];
                    $Status = $data_fetched['Status'];
                  /*  $course_phs = $data_fetched['course_phs'];
                    $institute_phs = $data_fetched['institute_phs'];
                    $company = $data_fetched['company'];
                    $organisation = $data_fetched['organisation'];
                    $designation = $data_fetched['designation'];*/
                    ?>
                    <td>
                        <input type="checkbox" class="checkBoxes" name="checkBoxArray[]"  id="checkBoxArray" value="<?php echo $alumni_id; ?>" />
                        </td>
<?php
                    /*echo '<tr>';*/
                    echo "<td>{$alumni_id}</td>";
                    echo "<td>{$alumni_name}</td>";
                    echo "<td>{$alumni_email}</td>";
                    echo "<td>{$alumni_ph_no}</td>";
                   
                   /* echo "<td>{$course_phs}</td>";
                    echo "<td>{$institute_phs}</td>";
                    echo "<td>{$company}</td>";
                    echo "<td>{$organisation}</td>";
                     echo "<td>{$designation}</td>";*/
                    echo "<td></td>";
                    #ILLEGAL - echo "<td><a class='btn btn-info' href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>"
                   
                    echo "</tr>";
                }

            ?>

            
    </tbody>
</table>

    <div class="form-group">
        <label for="Message">Subject</label>
        <input type="text" name="subject" class="form-control" placeholder="Subject for mail">
        <label for="Message">Message</label>
        <textarea name="Message" class="form-control" rows="3"></textarea>
    </div>
<center>
 <button name="submit" class="btn btn-primary">Send Mail</button>
</center>
</form>
<?php

    #Deleting Posts
    if( isset($_GET['delete_user']) )
    {
        $del_alumni_id = $_GET['delete_user'];
        $query = "DELETE FROM alumnis WHERE alumni_id = {$del_alumni_id}";
        $del_alumni_query = mysqli_query( $connection , $query );
        /*confirmquery($del_alumni_query);*/
        header("Location: alumnis.php");
    }
    
?>