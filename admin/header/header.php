<nav class="sb-topnav navbar navbar-expand navbar-light bg-white shadow-sm">
    <a class="navbar-brand" href="dashboard.html"><img alt="logo" src="img/logo.png" width="150" height="50px"></a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#" style="float: right;"><i class="fas fa-bars"></i></button>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary btn-sm" type="button"><i class="feather-search"></i></button>
            </div>
        </div>
    </form>

    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow ml-1 osahan-profile-dropdown" style="float: right;">
            <?php
            $query = "SELECT * FROM admin ";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_assoc($result);
            ?>
            <a class="nav-link dropdown-toggle pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                if ($row["admin_image"] == '') {
                    echo '  <img class="img-profile rounded-circle img-fluid" src="img/user.png" alt="user">';
                } else {
                ?>
                    <img class=" img-profile rounded-circle " src="<?php echo $row['admin_image']; ?>" alt="user profile" style="border: 2px solid #f25a18;">
                <?php } ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow-sm">
                <div class="p-3 d-flex align-items-center">
                    <div class="dropdown-list-image mr-3">
                        <?php
                        if ($row["admin_image"] == '') {
                            echo '  <img class="img-profile rounded-circle img-fluid" src="img/user.png" alt="user">';
                        } else {
                        ?>
                            <img class=" rounded-circle img-fluid" src="<?php echo $row['admin_image']; ?>" alt="user profile" style="border: 2px solid #f25a18;">
                        <?php } ?>
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate"><?php echo $row['admin_name']; ?></div>
                        <div class="small text-gray-500"><?php echo $row['role']; ?></div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="my-profile.html"><i class="feather-settings"></i> My Account
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.html"><i class="feather-log-out"></i> Logout</a>
            </div>
        </li>
    </ul>
</nav>