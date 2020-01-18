<?php include"functions.php";?>
<table class="table table-responsive table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <!--<th>Category</th>-->
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            
            <th>Course</th>
            <th>Enrollment No</th>
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

                $query = "SELECT * FROM requeststud";
                $student_fetched = mysqli_query( $connection , $query );
                while($data_fetched = mysqli_fetch_assoc($student_fetched))
                {
                    $stud_id = $data_fetched['stud_id'];
                    $stud_name = $data_fetched['stud_name'];
                    $stud_email = $data_fetched['email'];
                    $student_ph_no = $data_fetched['student_ph_no'];
                    $password = $data_fetched['password'];
                    $stud_gender = $data_fetched['stud_gender'];
                    $stud_course = $data_fetched['stud_course'];
                    $stud_enrollment = $data_fetched['enrollment'];
                    
                  /*  $course_phs = $data_fetched['course_phs'];
                    $institute_phs = $data_fetched['institute_phs'];
                    $company = $data_fetched['company'];
                    $organisation = $data_fetched['organisation'];
                    $designation = $data_fetched['designation'];*/
                    

                    echo '<tr>';
                    echo "<td>{$stud_id}</td>";
                    echo "<td>{$stud_name}</td>";
                    echo "<td>{$stud_email}</td>";
                    echo "<td>{$student_ph_no}</td>";
                    echo "<td>{$stud_course}</td>";
                    echo "<td>{$stud_enrollment}</td>";
                   /* echo "<td>{$course_phs}</td>";
                    echo "<td>{$institute_phs}</td>";
                    echo "<td>{$company}</td>";
                    echo "<td>{$organisation}</td>";
                     echo "<td>{$designation}</td>";*/
                    /*echo "<td></td>";*/
                    #ILLEGAL - echo "<td><a class='btn btn-info' href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                    echo "<td><a class='btn btn-success' href='acceptstudents.php?accept_student={$stud_id}' >Approve</a></td>";
                    echo "<td><a class='btn btn-danger' href='students.php?delete_user={$stud_id}' >Reject</a></td>";
                    echo "</tr>";
                }

            ?>
            
    </tbody>
</table>


<?php

    #Deleting Posts
    if( isset($_GET['delete_user']) )
    {
        $del_stud_id = $_GET['delete_user'];
        $query = "DELETE FROM students WHERE stud_id = {$del_stud_id}";
        $del_student_query = mysqli_query( $connection , $query );
        /*confirmquery($del_student_query);*/
        
        header("Location: students.php");
    }
    if(isset($_GET['accept_student']))
    {
    $id = $_GET['accept_student'];
    $query = "select * from `requeststud` where `stud_id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
          $name_s = $row['stud_name'];
        $email_s = $row['email'];
        $password_s = $row['password'];
        $ph_no_s = $row['student_ph_no'];
        $gender = $row['stud_gender'];
        $course = $row['stud_course'];
        $enroll = $row['enrollment'];
        $query = "INSERT INTO students(stud_name,email,student_ph_no,password,stud_gender,stud_course,enrollment) VALUES('$name_s','$email_s','$ph_no_s','$password_s','$gender','$course',$enroll)";
        }
        $query1 = "DELETE FROM requeststud WHERE stud_id = {$id};";
        if(performQuery($query)){
            echo "<script>alert('Student is approved')</script>";
        }else{
            echo "Unknown error occured. Please try again.";
        }
        if(performQuery($query1)){

        }
        else{
            echo "Unknown error occured. Please try again";
        }
    }else{
        echo "Error occured.";
    }
    header("Location: students.php");
}


    
?>