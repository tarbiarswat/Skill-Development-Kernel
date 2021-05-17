<!DOCTYPE html>
<html class="no-js" lang="en"> 
<head>
<?php  include('./includes/head.php')  ?>
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

                    <div class="modal fade" id="addinternship" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Internship Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="code.php" method="POST">

                                <div class="modal-body">

                                <div class="form-group">
                                    <label> Internship Title </label>
                                    <input type="text" name="internship_title" class="form-control" placeholder="Enter Internship Title">
                                </div>
                                <div>
                                    <label class="form-label" for="customFile">Internship Featured Image</label>
                                    <input type="file" class="form-control" id="customFile" />
                                </div>
                                <div class="form-group">
                                    <label>Internship Details</label>
                                    <input style="height:250px" type="text" name="internship_details" class="form-control" placeholder="Enter Internship Details">
                                </div>
                                <div class="form-group">
                                    <label>Offered By</label>
                                    <input type="text" name="internship_offered_by" class="form-control" placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                    <label>Application Deadline</label>
                                    <input type="text" name="internship_deadline" class="form-control" placeholder="Application Deadline">
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                            </div>
                                </form>

                        </div>
                    </div>
                </div>

                <div class="container-fluid py-5">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Internship Details 
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addinternship">
                            Add New Internship 
                            </button>
                    </h6>
                </div>

    <div class="card-body">

    <div class="table-responsive">

    <?php
    $connection = mysqli_connect("localhost","root","","sdk_db");
    $query = "SELECT * FROM internships";
    $query_run = mysqli_query($connection, $query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID </th>
            <th>Internship Title </th>
            <th>Internship Details </th>
            <th>Offered By</th>
            <th>Application Deadline</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>

        <?php
        if(mysqli_num_rows($query_run) > 0)
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
                ?>

            <tr>
            <td><?php echo $row['internship_id']; ?></td>
            <td><?php echo $row['internship_title']; ?></td>
            <td><?php echo $row['internship_details']; ?> <br> </td>
            <td><?php echo $row['internship_offered_by']; ?></td>
            <td><?php echo $row['internship_deadline']; ?></td>
            
            </tr>
            <?php
            }
        }

        else
        {
            echo "No Record Found";
        }
        ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>



                
                </div>
            </div>
        </div>
    </div>


<?php  include('./includes/scripts.php')  ?>

</body>
</html>