<?php
session_start();
include "conn.html";
$id = $_GET['id'];
if(isset($_POST['submit'])){
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];
    $cnf_password = $_POST['cnf_password']; 
	$query = "SELECT * FROM admin WHERE id ='$id'";
	$result = mysqli_query($connect,$query);
	while($row = mysqli_fetch_assoc($result))
{
    if($row['admin_email'] == $gmail ) 
	{
        if($password != $cnf_password) { 
            echo "<script>
alert('Password Not Match');
window.location.href='my-profile.html';
</script>";
            }
        $query = "UPDATE admin SET password = '$cnf_password' WHERE id = '$id'";
        
		mysqli_query($connect,$query) or die(mysqli_error($connect)); 
		echo "<script>
alert('Password Successfully Update');
window.location.href='my-profile.html';
</script>";
    }  
	else{ 
        echo "<script>
alert('No Records Found');
window.location.href='my-profile.html';
</script>";
	}

}
}
