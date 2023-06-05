<?php

include "conn.html";

$id = $_GET['id'];
$query = "DELETE FROM contact where id='$id'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if ($result > 0) {
    echo "<script>
alert('Contact Enquiry Successfully Deleted');
window.location.href='contact_enquiry.html';
</script>";
}
