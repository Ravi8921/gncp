<?php
include "conn.html";
error_reporting(0);

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $query = "INSERT INTO notification(notification_title)
    value('$title') ";
    mysqli_query($connect, $query) or die($query);
    echo "<script>
        alert('Add Notification Successfully');
            window.location.href='notification.html';
        </script>";
}
