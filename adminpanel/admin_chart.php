<?php
if( $_SESSION['role'] == 'admin' )
{
    #UnAuthorized Alumnis
    $query = "SELECT * FROM requests";
    $get_unauth_alumnis = mysqli_query( $connection , $query );
    $unauth_alumnis = mysqli_num_rows($get_unauth_alumnis);

    #Authorized Students
    $query = "SELECT * FROM students";
    $get_auth_stud = mysqli_query( $connection , $query );
    $auth_stud = mysqli_num_rows($get_auth_stud);  

    #Authorized Alumnis
    $query = "SELECT * FROM alumnis";
    $get_auth_alumnis = mysqli_query( $connection , $query );
    $auth_alumnis = mysqli_num_rows($get_auth_alumnis);

    #Unauthorized Students
    $query = "SELECT * FROM requeststud"; //students third column
    $get_unauth_stud = mysqli_query( $connection , $query );
    $unauth_stud = mysqli_num_rows($get_unauth_stud);
 
    #Array Collection
    $Data_Name = [ 'Alumnis' , 'Students'  ];
    $Authorized_Val = [$auth_alumnis , $auth_stud ];
    $Unauthorized_Val = [$unauth_alumnis , $unauth_stud ];
}
?>
   

<script type="text/javascript" src="./js/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Activity'  , 'Authorized' , 'Unauthorized'],

      <?php

            for( $i=0; $i<2; $i++ )
            {
                echo " [ '{$Data_Name[$i]}' " . "," . "{$Authorized_Val[$i]}" . "," . "{$Unauthorized_Val[$i]} ] , " ;
            }

      ?>
            
    ]);

    var options = {
      chart: {
        title: 'Overall Activity',
        subtitle: 'Alumnis , Students  ',
      }
    };

    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>
<div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>