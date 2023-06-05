<?php
include "conn.html";
session_start();
$admin = ($_SESSION["admin"]);
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
            <title>My Profile </title>
            <link rel="icon" type="image/png" href="img/favicon.png">
            <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
            <link href="vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="css/styles.css" rel="stylesheet" />
            <link href="vendor/dropzone/dist/dropzone.css" rel="stylesheet">
      </head>
      <style>
            .dropzone img {
                  width: 100%;
                  height: 200px;
            }
      </style>

      <body class="sb-nav-fixed">
            <!-- start Header -->
            <?php include "header/header.html"; ?>
            <!-- End Header -->
            <div id="layoutSidenav">
                  <!-- start Sidebar -->
                  <?php include "header/sidebar.html"; ?>
                  <!-- End Sidebar -->
                  <div id="layoutSidenav_content">
                        <main>
                              <div class="container-fluid">
                                    <h1 class="mt-4">My Profile</h1> 
                                    <?php
                                    $query = "SELECT * FROM admin where admin_id= '$admin' ";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
                                    <div class="row">
                                          <div class="col-xl-12">
                                                <div class="card mb-4 order-list">
                                                      <div class="gold-members p-4">
                                                            <form method="POST" action="profile_update.html?id=<?php echo $row['id']; ?>" enctype="multipart/form-data">
                                                                  <div class="row">
                                                                        <div class="col-md-4">
                                                                              <div class="form-group">
                                                                                    <label>Admin Profile</label>
                                                                                    <div class="dropzone">
                                                                                          <img src="<?php echo $row['admin_image']; ?>" class="img-fluid  admin_profile">
                                                                                    </div>
                                                                                    </br>
                                                                                    <input type="file" name="img" class="form-control">
                                                                              </div>
                                                                        </div>
                                                                        <div class="col-md-8 add_top_30">
                                                                              <div class="row">
                                                                                    <div class="col-md-3">
                                                                                          <div class="form-group">
                                                                                                <label>Admin Role</label>
                                                                                                <input type="text" class="form-control" disabled value="<?php echo $row['role']; ?>" placeholder="Your name">
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                          <div class="form-group">
                                                                                                <label>Admin ID</label>
                                                                                                <input type="text" class="form-control" disabled value="<?php echo $row['admin_id']; ?>" placeholder="Your name">
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                          <div class="form-group">
                                                                                                <label>Admin Name</label>
                                                                                                <input type="text" class="form-control" name="admin_name" value="<?php echo $row['admin_name']; ?>" placeholder="Your name">
                                                                                          </div>
                                                                                    </div>
                                                                              </div>

                                                                              <div class="row">
                                                                                    <div class="col-md-5">
                                                                                          <div class="form-group">
                                                                                                <label>Admin Phone</label>
                                                                                                <input type="text" class="form-control" name="admin_phone" value="<?php echo $row['admin_phone']; ?>" placeholder="Your telephone number">
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class="col-md-7">
                                                                                          <div class="form-group">
                                                                                                <label>Admin Email</label>
                                                                                                <input type="email" class="form-control" name="admin_email" value="<?php echo $row['admin_email']; ?>" placeholder="Your email">
                                                                                          </div>
                                                                                    </div>
                                                                              </div>

                                                                              <div class="row">
                                                                                    <div class="col-md-12">
                                                                                          <div class="button-group text-right">
                                                                                                <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Update Profile">
                                                                                          </div>
                                                                                    </div>
                                                                              </div>

                                                                        </div>

                                                                  </div>
                                                            </form>
                                                      </div>
                                                </div>
                                                <div class="row">
                                                      <div class="col-md-12">
                                                            <div class="card mb-4 order-list">
                                                                  <div class="gold-members">
                                                                        <div class="box_general padding_bottom">
                                                                              <div class="header_box version_2 border-bottom p-3">
                                                                                    <h6 class="m-0"><i class="fa fa-lock text-muted mr-2"></i>Change
                                                                                          password</h6>
                                                                              </div>
                                                                              <form action="reset_password.html?id=<?php echo $row['id']; ?>" method="POST" name="password reset">
                                                                                    <div class="container">
                                                                                          <div class="row " style="margin-top: 30px;">
                                                                                                <div class="col-md-6">
                                                                                                      <div class="form-group">
                                                                                                            <label>Email id</label>
                                                                                                            <input type="email" class="form-control" name="gmail" placeholder="Your Email Id">
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                      <div class="form-group">
                                                                                                            <label>New Password</label>
                                                                                                            <input type="text" class="form-control" name="password" placeholder="Enter Passowrd">
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                      <div class="form-group">
                                                                                                            <label>Conform Password</label>
                                                                                                            <input type="text" class="form-control" name="cnf_password" placeholder="Enter Comform Password">
                                                                                                      </div>
                                                                                                </div>
                                                                                          </div>
                                                                                          <div class="save mb-2 text-right">
                                                                                                <input type="submit" name="submit" class="btn btn-lg btn-warning" value="Change Password">
                                                                                          </div>
                                                                                    </div>
                                                                              </form>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <?php ?>
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