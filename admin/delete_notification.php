<?php 
include "conn.html"; 
$id = $_GET['id'];
$query = "DELETE FROM notification WHERE id='$id'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if ($result > 0) {
    echo "<script>
alert('Notification Successfully Deleted');
window.location.href='notification.html';
</script>";
}
