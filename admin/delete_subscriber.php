<?php

include "conn.html";

$id = $_GET['id'];
$query = "DELETE FROM subscriber where sub_id='$id'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if ($result > 0) {
    echo "<script>
alert('Subscriber Successfully Deleted');
window.location.href='subscriber.html';
</script>";
}
