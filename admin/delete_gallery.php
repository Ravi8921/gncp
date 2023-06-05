<?php

include "conn.html";
$id = $_GET['id'];
$query = "DELETE FROM gallery where id='$id'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if ($result > 0) {
    echo "<script>
alert('Gallery Image Successfully Deleted');
window.location.href='add_gallery.html';
</script>";
}
