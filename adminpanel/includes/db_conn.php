<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "alumni_portal";

    @$connection = mysqli_connect($host,$user,$pass,$db_name);

    if(!$connection)
    {
        die("404 DB NOT FOUND");
    }

    // function comfirmquery($result)
    // {
    //     global $connection;
        
    //     if(!$result)
    //     {
    //         die("Query Failed" . mysqli_error($connection));
    //     }
    // }

?>