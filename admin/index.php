<!DOCTYPE html>
<html class="no-js" lang="en"> 
<head>
<?php  include('./includes/head.php')  ?>
<?php  include('./includes/dbconfig.php')  ?>
</head>
<body>
    <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
        <!-- Main Sidebar -->
        <div id="sidebar">
            <?php  include('./includes/sidebar.php')  ?>
        </div>

        <div id="main-container">

        <?php  include('./includes/header.php')  ?>

            <div id="page-content">
                
                <div class="row">
                    
                    <div class="col-sm-6 col-lg-3">
                        <a href="javascript:void(0)" class="widget">
                            <div class="widget-content widget-content-mini text-right clearfix">
                                <div class="widget-icon pull-left themed-background">
                                    <i class="gi gi-cardio text-light-op"></i>
                                </div>
                                <h2 class="widget-heading h3">

                                <?php
                                $query = "SELECT id FROM users ORDER BY id";
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<strong>'.$row.'</strong>';

                                ?>

                                </h2>
                                <span class="text-muted">Total Users</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <a href="javascript:void(0)" class="widget">
                            <div class="widget-content widget-content-mini text-right clearfix">
                                <div class="widget-icon pull-left themed-background-success">
                                    <i class="gi gi-user text-light-op"></i>
                                </div>
                                <h2 class="widget-heading h3 text-success">

                                <?php
                                $query = "SELECT internship_id FROM internships ORDER BY internship_id";
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<strong>'.$row.'</strong>';
                                ?>

                                </h2>
                                <span class="text-muted">Total Internships Launched</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <a href="javascript:void(0)" class="widget">
                            <div class="widget-content widget-content-mini text-right clearfix">
                                <div class="widget-icon pull-left themed-background-warning">
                                    <i class="gi gi-briefcase text-light-op"></i>
                                </div>
                                <h2 class="widget-heading h3 text-warning">
                                    <?php
                                    $query = "SELECT course_id FROM courses ORDER BY course_id";
                                    $query_run = mysqli_query($connection, $query);
                                    $row = mysqli_num_rows($query_run);
                                    echo '<strong>'.$row.'</strong>';
                                    ?>
                                </h2>
                                <span class="text-muted">Total Course Offered</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <a href="javascript:void(0)" class="widget">
                            <div class="widget-content widget-content-mini text-right clearfix">
                                <div class="widget-icon pull-left themed-background-danger">
                                    <i class="gi gi-wallet text-light-op"></i>
                                </div>
                                <h2 class="widget-heading h3 text-danger">
                                    <strong>5802</strong>
                                </h2>
                                <span class="text-muted">EARNINGS</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php  include('./includes/scripts.php')  ?>

</body>
</html>