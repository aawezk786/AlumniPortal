
  <?php
  include"includes/header.php";
  ?>




        	<!-- Main Menu Start -->
			<div  id="navigation" class="main-menu">
				<div class="navbar-wrapper">
					<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle Navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								
								<a href="index.php" class="navbar-inverse"><img src="Kalsekar img/ARKP logo1.png" alt="Logo" height="50" width="200" /></a>
							</div>
							
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="index.php">Home</a></li>
									<li><a href=about.php>About</a></li>
									<li><a data-toggle="dropdown" href="#">Alumni Contribution<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                	 <li><a href="fund.php" >Fund</a></li>
                                                  <li><a href="expert_talk.php">Expert Talk</a></li>
                                                  <li><a href="workshop.php">Workshop</a></li>
                                                  <li><a href="i_v.php">I.V.(Industrial Visit)</a></li>
                                                  <li><a href="placement.php">Placement</a></li>
                                                   <li><a href="project_guidance.php">Project Guidance</a></li>
                                                    <li><a href="industrial_training.php">Industrial Training(Internship)</a></li>
                                                     <li><a href="any_other.php">Any Other...</a></li>

                                                  
                                                </ul>
									
                                    <li><a href=Members.php>Members</a></li>            										
									<li><a href=Events.php>Event</a></li>
									
                                     
                                    <?php
                                        if(isset($_SESSION['stud_name_session']))
                                        {
                                            ?>
                                            <li><a data-toggle="dropdown" href="#"><?php echo$_SESSION['stud_name_session']; ?><span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                	 <li><a href="chat_room/index.php">Chatroom</a></li>
                                                    <li><a style="cursor:pointer" data-toggle="modal" data-target="#Updatemodal">Profile Update</a></li>
                                                  <li><a href="Process/logout.php">LOGOUT</a></li>
                                                  
                                                </ul>
                                                
                                            </li>
                                            <?php
                                        }
                                        else if(isset($_SESSION['alumni_name_session']))
                                        {
                                            ?>
                                            <li><a data-toggle="dropdown" href="#"><?php echo$_SESSION['alumni_name_session']; ?><span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                	<li><a href="chat_room/index.php">Chatroom</a></li>
                                                  <li><a style="cursor:pointer" data-toggle="modal" data-target="#Updatemodal">Profile Update</a></li>
                                                  <li><a href="Process/logout.php">LOGOUT</a></li>
                                                  
                                                </ul>
                                               
                                            </li>
                                            <?php
                                        }
                                        else
                                        {
                                            echo '<li><a style="cursor:pointer" data-toggle="modal" data-target="#LoginModal">Login / Register</a></li>';
                                        }
                                    ?>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Main Menu End -->
			
<style>
    .navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:focus, .navbar-inverse .navbar-nav > .open > a:hover
    {
        color: #fff;
        background-color: white;
    }
</style>