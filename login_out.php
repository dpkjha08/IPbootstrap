
<?php
unset($_SESSION['logged_in']);  
session_destroy();  
echo "<script>location.href='login.html'</script>";
?>
