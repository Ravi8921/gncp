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
        <title>Product Service </title>
        <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
        <link rel="icon" type="image/png" href="img/favicon.png">
        <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
        <link href="vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="vendor/dropzone/dist/dropzone.css" rel="stylesheet">
    </head>
    <style>
        input[type=file] {
            margin-top: 15px;
            background-color: #a6a4b357;
            padding: 3px;
            color: white;
        }
    </style>

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
                    <div class="container-fluid">
                        <div class="row mt-5">
                            <?php
                            mysqli_set_charset($connect, "utf8");
                            $query = "SELECT * FROM products WHERE product_id = '$_GET[id]'";
                            $result = mysqli_query($connect, $query);
                            $row = mysqli_fetch_array($result);
                            ?>
                            <form action="update_product_db.html?id=<?= $row['product_id'] ?>" method="POST" enctype="multipart/form-data"> 
                                <div class="col-xl-12"> 
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-marker"></i> <b> Update Services</b>
                                            <button type="button" class="btn btn-primary" style='float:right;'><?php
                                                                                                                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                                                                                                echo "<a href='$url' class='text-white'>Back</a>"; ?></button>
                                        </div>
                                        <div class="card-body"> 
                                            <div class="box_general padding_bottom">
                                                <div class="wrapper_indent"> 
                                                    <div class="strip_menu_items">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <div class="dropzone">
                                                                    <img src="<?php echo $row['product_image']; ?>" class="img-fluid">
                                                                </div>
                                                                <input type="file" class="form-control" name="profile">
                                                            </div>
                                                            <div class="col-xl-9 mt-4">
                                                                <div class="row">
                                                                    <div class="col-md-9">
                                                                        <div class="form-group">
                                                                            <label>Service Title</label>
                                                                            <input type="text" name="product_name" value="<?php echo $row['product_name']; ?>" class="form-control" placeholder="Product Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Renewal Option</label>
                                                                            <select name="type" class="custom-select">
                                                                                <option selected value="<?php echo $row['product_type']; ?>"><?php echo $row['product_type']; ?></option>
                                                                                <option value="Tablet">Tablet</option>
                                                                                <option value="Cream">Cream</option>
                                                                                <option value="Syrup">Syrup</option>
                                                                                <option value="Injection">Injection</option>
                                                                                <option value="Hardgel">Hardgel</option>
                                                                                <option value="Softgel">Softgel</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Service Description</label>
                                                                            <textarea id="editor1" name="editor1">  <?php echo $row['product_description']; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="text-right mb-4 mt-4">
                                                            <input type="submit" name="submit" class="bnt btn-success btn-lg" value="Update Service">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
         <?php include "header/footer.html";?>
            </div>
        </div>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/fontawesome/js/all.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/rocket-loader.min.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor1'))
                .then(editor => {
                    console.log(editor1);
                })
                .catch(error => {
                    console.error(error);
                });
        </script>

    </html>
<?php } ?>