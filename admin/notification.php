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
        <title>Add Products</title>
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
            padding: 85px 15px;
            color: #000;
            border: 3px dotted #ced4da;
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
                        <form action="notification_db.html" method="POST">
                            <div class="row mt-5">
                                <div class="col-xl-12">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-box mr-1"></i> <b> Add Notification </b>
                                            <button type="button" class="btn btn-primary" style='float:right;'><?php
                                                                                                                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                                                                                                echo "<a href='$url' class='text-white'>Back</a>"; ?></button>
                                        </div>
                                        <div class="card-body">
                                            <div class="box_general padding_bottom">
                                                <div class="wrapper_indent">
                                                    <div class="strip_menu_items">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Notification title</label>
                                                                    <input type="text" name="title" class="form-control form-control-lg" required placeholder=" Title">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right mb-4 ">
                                                <input type="submit" name="submit" class="bnt btn-success  btn-lg" value="Add Notification ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    <b>All Notification </b>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                            <thead class="table-dark">
                                                <tr class="text-uppercase">
                                                    <th> Id</th>
                                                    <th>title</th>
                                                    <th> Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = '1'; 
                                                $query = "SELECT * FROM notification ORDER BY id desc ";
                                                $result = mysqli_query($connect, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $i++; ?></td>
                                                        <td> <?php echo $row['notification_title']; ?></td>
                                                        <td><?php echo $row['add_date']; ?> </td>
                                                        <td> <a href="delete_notification.html?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="feather-trash"></i></a> </td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                                </div>
                                
                            </div> 
                    </form>
                </main>
                <?php include "header/footer.html"; ?>

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