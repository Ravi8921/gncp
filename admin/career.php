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
        <title>Service Full Details </title>
        <link rel="icon" type="image/png" href="img/favicon.png">
        <link href="vendor/dropzone/dist/dropzone.css" rel="stylesheet">
        <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
        <link href="vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body class="sb-nav-fixed">
        <!-- start Header -->
        <?php include "header/header.html"; ?>
        <!-- End Header -->
        <div id="layoutSidenav">
            <!-- Start Sidebar -->
            <?php include "header/sidebar.html"; ?>
            <!-- End Sidebar-->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="row mt-5">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-gift mr-1"></i> <strong>All Career list </strong>
                                        <button type="button" class="btn btn-success" style='float:right;'> <a href='add_career.html' class='text-white'>Add Career</a></button>
                                    </div>
                                    <?php
                                    $i = '1';
                                    $query = "SELECT * FROM career ORDER BY job_id DESC ";
                                    $result = mysqli_query($connect, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <div class="card-body">
                                            <div class=" mb-4 order-list">
                                                <div class="gold-members">
                                                    <div class="media">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <img class="mr-4" src="<?php echo $row['image']; ?>" class="img-fluid" alt="Generic placeholder image">
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <div class="media-body">
                                                                        <p class="float-right mt-1 text-black mb-1 text-success d-none d-md-block"> <b> Add Date: </b> <?php echo $row['date']; ?> <i class="feather-check-circle text-success"></i> </p>
                                                                        <h3 class="font-weight-bold mt-1"><?php echo $row['job_title']; ?> </h3>
                                                                        <p class="text-black mt-3 text-justify"><i class="fas fa-box"></i> <b> Description : </b><i class="feather-list"></i> <?php echo $row['description']; ?> </p>
                                                                        <hr>
                                                                        <div class="float-right text-bold">
                                                                            <a href="delete_career.html?id=<?php echo $row['job_id']; ?>" class="btn btn-sm btn-danger"><i class="feather-trash"></i> Delete </a>
                                                                        </div>
                                                                        <p class="mb-0 text-dark text-dark pt-2"> <span class="text-dark font-weight-bold"> <strong>POST: </strong></span> <?php echo $row['post']; ?> | <span class="text-dark font-weight-bold"> <strong>Salary: </strong></span> <?php echo $row['salary']; ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php ?>
                    </div>
                </main>
                <?php include "header/footer.html"; ?>
            </div>
        </div>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/fontawesome/js/all.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/rocket-loader.min.js"></script>
    </body>


    </html>
<?php } ?>