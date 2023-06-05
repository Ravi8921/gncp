<?php

include "conn.html";
session_start();
$id = $_GET['id'];
$query = "UPDATE products SET product_status = 'Active' WHERE product_id = '$id' ";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if ($result > 0) {
    echo "<script>
alert('Product Active Successfully');
window.location.href='dashboard.html';
</script>";
}
