<?php

include "conn.html";

$id = $_GET['id'];
$query = "DELETE FROM career WHERE job_id='$id'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if ($result > 0) {
    echo "<script>
alert('Career Successfully Deleted');
window.location.href='career.html';
</script>";
}
