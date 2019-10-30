<?php
session_start();

    if ($_SESSION['java_attempt']==0){
	echo "<script>location.href='test_java.html'</script>";
        
    }

else{

    $aisehi="hojayega shayad!!!";
	echo "<script>location.href='certificate_java.php'</script>";
    
}

?>