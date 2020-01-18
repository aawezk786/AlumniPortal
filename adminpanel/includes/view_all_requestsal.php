<?php include"functions.php";?>
<table class="table table-responsive table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <!--<th>Category</th>-->
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th colspan="2"><center>Action</center></th>
           <!--  <th>Course Phs</th>
            <th>Institute Phs</th>
            <th>Company</th>
            <th>Organization</th>
            <th>Designation</th> -->
            
        </tr>
    </thead>
    <tbody>
           
            <?php

                $query = "SELECT * FROM requests";
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
                    

                    echo '<tr>';

                    echo "<td>{$alumni_id}</td>";
                    echo "<td>{$alumni_name}</td>";
                    echo "<td>{$alumni_email}</td>";
                    echo "<td>{$alumni_ph_no}</td>";
                   
                   /* echo "<td>{$course_phs}</td>";
                    echo "<td>{$institute_phs}</td>";
                    echo "<td>{$company}</td>";
                    echo "<td>{$organisation}</td>";
                     echo "<td>{$designation}</td>";*/
                    
                    #ILLEGAL - echo "<td><a class='btn btn-info' href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                      echo "<td><a class='btn btn-success' href='acceptalumni.php?accept_alumni={$alumni_id}' >Approve</a></td>";
                    echo "<td><a class='btn btn-danger'  onClick=\"javascript: return confirm('Are You Sure You Want to Delete Alumni');\" href='alumnis.php?delete_user={$alumni_id}' >Delete</a></td>";
                    echo "</tr>";
                }

            ?>
            
    </tbody>
</table>


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
    
    if(isset($_GET['accept_alumni']))
    {
    $id = $_GET['accept_alumni'];
    $query = "select * from `requests` where `alumni_id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $al_name_s = $row['alumni_name'];
        $al_email_s = $row['email'];
        $al_ph_no_s =$row['alumni_ph_no'];
        $al_password_s = $row['password'];
        $al_gender_s = $row['alumni_gender'];
        $al_country  =$row['country'];
        $al_course_s = $row['alumni_course'];
        $al_last_year_s = $row['alumni_last_year'];
        $al_cert_code_s = $row['certificate_code'];
        $Status = $row['Status'];
        $institute_phs = $row['institute_phs'];
        $company = $row['company'];
        $designation = $row['designation'];
        $organisation = $row['organisation'];
        $no_of_employees = $row['no_of_employees'];
        $turnover =$row['turnover'];
        $other = $row['other'];
        $course_phs = $row['course_phs'];
        $img_phs = $row['img_phs'];
        $img_job = $row['img_job'];
             $query = "INSERT INTO alumnis(alumni_id, alumni_name, email, alumni_ph_no, password, alumni_gender, country, alumni_course, alumni_last_year, certificate_code, Status, course_phs, institute_phs, company, organisation, designation, no_of_employees, turnover, other, img_phs, img_job, role) VALUES (NULL, '$al_name_s', '$al_email_s', '$al_ph_no_s', '$al_password_s', '$al_gender_s', '$al_country', '$al_course_s', '$al_last_year_s', '$al_cert_code_s', '$Status', '$course_phs', '$institute_phs', '$company', '$organisation','$designation', '$no_of_employees', '$turnover', '$other', '$img_phs', '$img_job','')";
        }
       $query1 = "DELETE FROM requests WHERE alumni_id = {$id}";
        if(performQuery($query)){
            echo "<script>alert('Alumni is approved')</script>";
        }else{
            echo "Unknown error occured. Please try again.";
        }
        if(performQuery($query1)){
            echo "<script>alert('Alumni is deleted')</script>";
        }
        else{
            echo "Unknown error occured. Please Try Again";
        }
    }else{
        echo "Error occured.";
    }
    
    header("Location: alumnis.php");
}

?>