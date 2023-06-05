<?php
include "conn.html";
?>
<?php


if (isset($_POST['submit'])) {
    $file = $_FILES['img'];
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
                $folder = "gallery/" . $file_name;
                move_uploaded_file($file_tmp, $folder);
            }
        }
    }
    $query = "INSERT INTO gallery(image, status) VALUES ('$folder', 'Active') ";

    mysqli_query($connect, $query) or die($query);

    echo "<script>
        alert('Add Gallery Successfully');
            window.location.href='add_gallery.html';
        </script>";
}

?>
