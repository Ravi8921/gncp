<?php
include "conn.html";
session_start();
if (empty($_SESSION["admin"])) {
    header('location:index.html');
} else {
?>
    <!DOCTYPE html>
    <html lang="en">


    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Praneja Envirocare & Management Pvt. Ltd." />
        <meta name="author" content="Praneja Envirocare & Management Pvt. Ltd." />
        <title>Career Enquiry </title>
        <link rel="icon" type="image/png" href="img/favicon.png">
        <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
        <link href="vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" /> 
        <link href="vendor/dataTables/dataTables/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>

    <body class="sb-nav-fixed">
        <!-- start Header -->
        <?php include "header/header.html"; ?>
        <!-- End Header -->
        <div id="layoutSidenav">
            <!-- start sidebar -->
            <?php include "header/sidebar.html"; ?>
            <!-- End sidebar -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid mt-5"> 
                        <div class="col-xl-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    <b>All Career Enquiry </b>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable"  cellspacing="0">
                                            <thead class="table-dark">
                                                <tr class="text-uppercase">
                                                    <th> Id</th>
                                                    <th> Profile</th>
                                                    <th> Name</th>
                                                    <th> Email</th>
                                                    <th> Mobile</th> 
                                                    <th> Message</th>
                                                    <th> Resume</th>
                                                    <th> Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = '1'; 
                                                $query = "SELECT * FROM career_enq ORDER BY car_id DESC ";
                                                $result = mysqli_query($connect, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $i++; ?></td>
                                                        <td> <?php echo $row['profile']; ?></td>
                                                        <td> <?php echo $row['name']; ?></td>
                                                        <td> <?php echo $row['email']; ?></td>
                                                        <td> <?php echo $row['mobile']; ?></td> 
                                                        <td> <?php echo $row['message']; ?></td> 
                                                        <td> <a href="../<?php echo $row['resume'];?>" target="_blank" class="bnt btn-success btn-sm">View Resume</a></td> 
                                                        <td><?php echo $row['date']; ?> </td>
                                                        <td> <a href="delete_career_enq.html?id=<?php echo $row['car_id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> </td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include "header/footer.html"; ?>
            </div>
        </div>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/fontawesome/js/all.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script> 
        <script src="vendor/dataTables/dataTables/js/jquery.dataTables.min.js"></script>
        <script src="vendor/dataTables/dataTables/js/dataTables.bootstrap.min.js"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script src="js/rocket-loader.min.js"></script>



    </html>
<?php } ?>