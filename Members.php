<?php
      ob_start();
      session_start();
      include"includes/db_conn.php";
      include"includes/header.php";
?>
    <body>
    <header id="home">
<?php 
      include"includes/navmenu.php";
?>
    </header>

<br>

<?php
$query = "SELECT * FROM alumnis";
 # Execute the SELECT Query
  if( !( $selectRes = mysqli_query($connection,$query) ) )
  {
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }
  else
  {        
    ?>
    <div>
      <br>
       <center><h2>List of All Alumnis:</h2></center>
<center><table border="3" class="table table-responsive  table-hover">
  <thead>
    <tr>
      <th>Alumni Name</th>      
      <th>Course</th>
      <th>Lastyear</th>
      <th>Status</th>
      <th>Company</th>
      <th>Designation</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysqli_num_rows( $selectRes )==0 )
      {
        echo '<tr><td colspan="6">No Rows Returned</td></tr>';
      }
      else
      {
        while( $row = mysqli_fetch_assoc( $selectRes ) )
        {
          echo "<tr><td>{$row['alumni_name']}</td>
          <td>{$row['alumni_course']}</td>
          <td>{$row['alumni_last_year']}</td>
          <td>{$row['Status']}</td>
          <td>{$row['company']}</td>
          <td>{$row['designation']}</td></tr>\n";
        }
      }
    }
    ?>
  </tbody>
</table>
</center>
    <?php
  

?>
</div>
<!-- Student -->

<div>
  <?php
  $query = "SELECT * FROM students";
 # Execute the SELECT Query
  if( !( $selectRes = mysqli_query($connection,$query) ) )
  {
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else
  {
    ?>
  
       <center><h2>List of All Students:</h2></center>

<center><table border="3" class="table table-responsive  table-hover">
  <thead>
    <tr>
      <th>Student Name</th>
      <th>Course</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysqli_num_rows( $selectRes )==0 )
      {
        echo '<tr><td colspan="6">No Rows Returned</td></tr>';
      }
      else
      {
        while( $row = mysqli_fetch_assoc( $selectRes ) )
        {
          echo "<tr><td>{$row['stud_name']}</td>
          <td>{$row['stud_course']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
</center>
    <?php
  
}
?>
</div>

<div>
<?php
$query = "SELECT * FROM requests";
 # Execute the SELECT Query
  if( !( $selectRes = mysqli_query($connection,$query) ) )
  {
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }
  else
  {        
    ?>
    <div>
      <br>
       <center><h2>List of Pending Alumnis:</h2></center>
<center><table border="3" class="table table-responsive  table-hover">
  <thead>
    <tr>
      <th>Alumni Name</th>      
      <th>Course</th>
      <th>Lastyear</th>
      <th>Status</th>
      <th>Company</th>
      <th>Designation</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysqli_num_rows( $selectRes )==0 )
      {
        echo '<tr><td colspan="6">No Rows Returned</td></tr>';
      }
      else
      {
        while( $row = mysqli_fetch_assoc( $selectRes ) )
        {
          echo "<tr><td>{$row['alumni_name']}</td>
          <td>{$row['alumni_course']}</td>
          <td>{$row['alumni_last_year']}</td>
          <td>{$row['Status']}</td>
          <td>{$row['company']}</td>
          <td>{$row['designation']}</td></tr>\n";
        }
      }
    }
    ?>
  </tbody>
</table>
</center>
    <?php
  

?>
</div>
<div>
  <?php
  $query = "SELECT * FROM requeststud";
 # Execute the SELECT Query
  if( !( $selectRes = mysqli_query($connection,$query) ) )
  {
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else
  {
    ?>
  
       <center><h2>List of Pending Students:</h2></center>

<center><table border="3" class="table table-responsive  table-hover">
  <thead>
    <tr>
      <th>Student Name</th>
      <th>Course</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysqli_num_rows( $selectRes )==0 )
      {
        echo '<tr><td colspan="6">No Rows Returned</td></tr>';
      }
      else
      {
        while( $row = mysqli_fetch_assoc( $selectRes ) )
        {
          echo "<tr><td>{$row['stud_name']}</td>
          <td>{$row['stud_course']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
</center>
    <?php
  
}
?>
</div>
</div>
</body>

<br>


<?php
    include"includes/footer.php";
    include"includes/modals.php";
?>