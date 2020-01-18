       
                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                       <?php
                       
                           $query = "SELECT * FROM events";
                           $res_for_post_cnt_query = mysqli_query( $connection , $query );
                           $total_posts = mysqli_num_rows($res_for_post_cnt_query);
                        
                       ?>
                        <div class='huge'><?php echo $total_posts; ?></div>
                        <div>Events</div>
                    </div>
                </div>
            </div>
            <a href="Events.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <!-- fa fa-comments fa-5x -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                       
                           $query = "SELECT * FROM alumnis";
                           $res_for_comments_cnt_query = mysqli_query( $connection , $query );
                           $total_comments = mysqli_num_rows($res_for_comments_cnt_query);
                        
                    ?>
                     <div class='huge'><?php echo $total_comments; ?></div>
                      <div>Alumnis</div>
                    </div>
                </div>
            </div>
            <a href="alumnis.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                       
                           $query = "SELECT * FROM students";
                           $res_for_users_cnt_query = mysqli_query( $connection , $query );
                           $total_users = mysqli_num_rows($res_for_users_cnt_query);
                        
                    ?>
                    <div class='huge'><?php echo $total_users; ?></div>
                        <div> Students</div>
                    </div>
                </div>
            </div>
            <a href="students.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                       <?php
                       
                           $query = "SELECT * FROM contact";
                           $res_for_cats_cnt_query = mysqli_query( $connection , $query );
                           $total_cats = mysqli_num_rows($res_for_cats_cnt_query);
                        
                    ?>
                        <div class='huge'><?php echo $total_cats; ?></div>
                         <div>Contacts/Feedback</div>
                    </div>
                </div>
            </div>
            <a href="contacts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
                <!-- /.row -->
                
<?php include"admin_chart.php"; ?>