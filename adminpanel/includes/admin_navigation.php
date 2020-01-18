<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" style=" color:white; ">Admins</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li><a href="../index.php">Home Page</a></li>
        <!--Dump messages.php-->
        <?php #include"..//dump/messages.php"; ?>
        <!--Dump alert.php-->
        <?php #include"..//dump/alertmsg.php"; ?>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['alumni_name_session']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                
                <!-- <li class="divider">HR in LI</li> -->
                <li>
                    <a href="../Process/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Events <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="posts_dropdown" class="collapse">
                    <li>
                        <a href="./Events.php">View Events</a>
                    </li>
                    <li>
                        <a href="./add_events.php">Add Events</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;" data-toggle="collapse" data-target="#contribution_dropdown"><i class="fa fa-fw fa-desktop"></i> Alumni Contribution <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="contribution_dropdown" class="collapse">
                    <li>
                        <a href="./Expert.php">Expert Talk</a>
                    </li>
                    <li>
                        <a href="./workshop.php">Workshop</a>
                    </li>
                    <li>
                        <a href="./i_v.php">Industrial Visit</a>
                    </li>
                    <li>
                        <a href="./placement.php">Placement</a>
                    </li>
                    <li>
                        <a href="./pguidance.php">Project Guidance</a>
                    </li>
                    <li>
                        <a href="./training.php">Industrial training(Internship)</a>
                    </li>
                    <li>
                        <a href="./anyother.php">Any Other</a>
                        <!-- <a href="./posts.php?source=add_post">Any Other</a> -->
                    </li>
                </ul>
            </li>
            <li>
                <a href="MeetAlumni.php"><i class="fa fa-fw fa-envelope"></i> Meet Alumni </a>
            </li>
             <li>
                <a href="acceptalumni.php"><i class="fa fa-fw fa-users"></i> Pending Alumni </a>
            </li>
             <li>
                <a href="acceptstudents.php"><i class="fa fa-fw fa-users"></i> Pending Students </a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#users_dropdown"><i class="fa fa-fw fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="users_dropdown" class="collapse">
                    <li>
                        <a href="./alumnis.php">View Alumnis</a>
                    </li>
                    <li>
                        <a href="./students.php">View Students</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
<!-- /.navbar-collapse -->
</nav>