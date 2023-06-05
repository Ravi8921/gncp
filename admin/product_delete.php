<?php 
    
    include "conn.html"; 
    $id= $_GET['id']; 
    $query="DELETE FROM products where product_id='$id'";
    $result=mysqli_query($connect,$query) or die(mysqli_error($connect));
    if($result>0)
    { 
         echo "<script>
alert('Product Delete Successfully');
window.location.href='dashboard.html';
</script>"; 
    } 
