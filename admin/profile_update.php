<?php
include "conn.html";
?>

 <?php
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {
        $filename = $_FILES['img']['name'];
        $tempname = $_FILES['img']['tmp_name'];
        $folder = "img/admin/" . $filename;

        $p = "";
        if (move_uploaded_file($tempname, $folder)) {
            $p = " admin_image = '$folder', ";
        }

        $admin_name = $_POST['admin_name'];
        $admin_phone = $_POST['admin_phone'];
        $admin_email = $_POST['admin_email'];
        $query = " UPDATE admin  SET  admin_name = '$admin_name'," . $p . " admin_phone = '$admin_phone', admin_email = '$admin_email'  WHERE id = '$id'";
        mysqli_query($connect, $query) or die($query);
        echo "<script>
            alert('Admin Profile Successfully Update');
                window.location.href='my-profile.html';
            </script>";
    }

    ?>
