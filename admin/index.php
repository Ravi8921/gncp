<?php
session_start();
include "conn.html";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Praneja Envirocare & Management Pvt. Ltd." />
    <meta name="author" content="Praneja Envirocare & Management Pvt. Ltd." />
    <title> Admin Login | Inventry Management Panel</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body style="background-image: url(img/login_back.jpg); background-size:cover;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <img src="img/logo.png" class="img-fluid">
                                    <h3 class="text-center font-weight-bold my-4 text-dark"><b> Welcome to IMS Panel</b> </h3>
                                </div>
                                <div class="card-body">
                                    <form action="admin_login.html" method="POST" name="admin_Login">
                                        <div class="form-group">
                                            <label>Email or Username</label>
                                            <input class="form-control py-4" name="username" type="text" placeholder="Enter your Email id" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control py-4" name="password" type="password" placeholder="Enter password" />
                                        </div>
                                        <div class="form-group text-right mt-4 mb-0">
                                            <!-- <a class="small" href="password.html">Forgot Password?</a> -->
                                            <input type="submit" class="btn btn-success font-weight-bold" name="submit" value="Admin Login">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/fontawesome/js/all.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/rocket-loader.min.js"></script>
</body>


</html>