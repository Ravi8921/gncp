<?php
include "conn.html";
error_reporting(0); 
if (isset($_POST['submit'])) {
    $file = $_FILES['cover'];
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
                $folder = "career/" . $file_name;
                move_uploaded_file($file_tmp, $folder);
            }
        }
    }
    $title = $_POST['title'];
    $post = $_POST['post'];  
    $salary = $_POST['salary']; 
    $description = $_POST['editor1']; 

    $query = "INSERT INTO career(job_title,	post, description, image, salary)
    value('$title', '$post', '$description', '$folder', '$salary' ) ";

    mysqli_query($connect, $query) or die($query);

    echo "<script>
        alert('Add Career Successfully');
            window.location.href='career.html';
        </script>";
}

?>
