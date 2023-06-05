<?php
include "conn.html";
error_reporting(0);
?>

 <?php
    $id = $_GET['id'];
    mysqli_set_charset($connect, "utf8");
    $query = "SELECT * FROM products WHERE product_id='$_GET[id]'";

    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);

    if (isset($_POST['submit'])) {

        $filename = $_FILES['profile']['name'];
        $tempname = $_FILES['profile']['tmp_name'];
        $folder = "productimages/" . $filename;

        $p = "";
        if (move_uploaded_file($tempname, $folder)) {
            $p = " product_image = '$folder', ";
        }

        $product_name = $_POST['product_name'];
        $type = $_POST['type'];
        $product_description = $_POST['editor1'];

        $query = " UPDATE products  SET  product_name = '$product_name'," . $p . " product_type ='$type',  product_description = '$product_description', product_status='Active'  WHERE product_id = '$id'";
        mysqli_query($connect, $query) or die($query);

        echo "<script>
            alert('Update Product Successfully');
                window.location.href='all_products.html';
            </script>";
    }

    ?>
