<?php
include "conn.html";
error_reporting(0); 

if (isset($_POST['submit'])) {
    $file = $_FILES['profile'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    $allowed = array('jpg', 'jpeg', 'pdf', 'png');
    if (in_array($file_ext, $allowed)) {
        if ($file_error === 0) {
            if ($file_size <= 2097152) {
                $folder = "productimages/" . $file_name;
                move_uploaded_file($file_tmp, $folder);
            }
        }
    }
    $product_name = $_POST['product_name']; 
    $type = $_POST['type'];  
    $product_description = $_POST['editor1'];  

    $query = "INSERT INTO products(product_name, product_type,  product_image, product_description, product_status)
    value('$product_name', '$type', '$folder', '$product_description', 'Active') ";
    mysqli_query($connect, $query) or die($query);
    echo "<script>
        alert('Add Product Successfully');
            window.location.href='all_products.html';
        </script>";
}
