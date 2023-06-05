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
                            <?php
                            $query = "SELECT * FROM products WHERE product_id = '$_GET[id]'";
                            $result = mysqli_query($connect, $query);
                            $row = mysqli_fetch_array($result);
                            ?>
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-gift mr-1"></i> <strong> Service Full Details </strong>
                                        <button type="button" class="btn btn-primary" style='float:right;'><?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                        echo "<a href='$url' class='text-white'>Back</a>"; ?></button>
                                    </div>
                                    <div class="card-body">
                                        <div class=" mb-4 order-list">
                                            <div class="gold-members">
                                                <div class="media">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <img class="mr-4" src="<?php echo $row['product_image']; ?>" class="img-fluid" alt="Generic placeholder image">
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="media-body"> 
                                                                    <h3 class="font-weight-bold mt-1"><?php echo $row['product_name']; ?> </h3> 
                                                                    <p class="text-black mb-1"> <i class="fas fa-box"></i> <b>Product Type :</b> <?php echo $row['product_type']; ?> </p>
                                                                    <p class="text-black mt-3 text-justify"><i class="fas fa-box"></i> <b> Service Description : </b><i class="feather-list"></i> <?php echo $row['product_description']; ?> </p>
                                                                    <hr>
                                                                    <div class="float-right text-bold">
                                                                        <a class="btn btn-sm btn-dark disabled"><b> Status: </b> <?php echo $row['product_status']; ?> <i class="feather-check-circle"></i></a>
                                                                        <?php
                                                                        if ($row["product_status"] == 'Active') {
                                                                            echo '<a href="product_inactive.html?id= '.$row['product_id'].'"><i class="feather-check-circle btn btn-warning btn-sm "> Inactive</i></a>'; 
                                                                        } else {
                                                                        ?>
                                                                           <a href="product_active.html?id=<?php echo $row['product_id']; ?>"><i class="feather-check-circle btn btn-success btn-sm "> Active</i></a>
                                                                        <?php } ?> 
                                                                        <a href="update_product.html?id=<?php echo $row['product_id']; ?>" class="btn btn-sm btn-info"><i class="feather-edit"></i> Update</a>
                                                                        <a href="product_delete.html?id=<?php echo $row['product_id']; ?>" class="btn btn-sm btn-danger"><i class="feather-trash"></i> </a>
                                                                    </div>
                                                                    <p class="float-left mt-1 text-black mb-1 text-success d-none d-md-block"> <b> Add Date: </b> <?php echo $row['product_add_date']; ?> <i class="feather-check-circle text-success"></i> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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