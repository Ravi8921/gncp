<?php
session_start();
unset ($_SESSION["admin"]);
session_unset();
   $_SESSION['warning']="logout Successfully";

echo "<script>
window.location.href='index.html';
</script>"; 
?>