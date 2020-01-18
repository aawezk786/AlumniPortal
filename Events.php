
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
  <style type="text/css">
    .bg {
  /* The image used */
  background-image: url("event3.png");

  /* Full height */
  height: 50%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}



  </style>
<body class="bg" >


 

                <?php

                    $query = "SELECT * FROM events";
                    $events_fetched_res = mysqli_query( $connection , $query );
                    while($data_fetched_posts = mysqli_fetch_assoc($events_fetched_res))
                    {
                        $event_id = $data_fetched_posts['event_id'];
                        $event_title = $data_fetched_posts['event_title'];
                        $event_organizer = $data_fetched_posts['event_organizer'];
                        $event_description = $data_fetched_posts['event_description'];
                        $event_date = $data_fetched_posts['event_date'];
                        $event_time = $data_fetched_posts['event_time'];
                        $event_image = $data_fetched_posts['event_image'];
                        echo '<tr>';
                        ?>
                        <table class="table table-responsive">
                        <tbody>
                          <center>
                        <div >
                         <h1><a><span class="flaticon-camera"></span>&nbsp;&nbsp;<u><?php echo "$event_title";?></u></h1><p><h4>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo"Date:$event_date";?>&nbsp;&nbsp;<?php echo"Time:$event_time";?></h4></p></a>
                        
                        </div>
                        <h3>&nbsp;&nbsp;<a><u>Organizer:</u><?php echo "$event_organizer";?></a></h3>
                      &nbsp;&nbsp;&nbsp;&nbsp;<?php echo"<img alt='img missing' width=700 src='adminpanel/images/Events/{$event_image}'/>"?>
                        
                        <br>
                        <br>
                        <h3><a>&nbsp;&nbsp;<u>Details:</u><?php echo "$event_description";?></a></h3>
                      </center>
                      </tbody>

                      </table>
                        <?php

                        
                    }

                ?>


        </tbody>
    </table>

</body>
<br>

<?php
    include"includes/footer.php";
    include"includes/modals.php";
?>