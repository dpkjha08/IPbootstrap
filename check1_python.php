<?php
session_start();

    if ($_SESSION['python_attempt']==0){
	echo "<script>location.href='test_python.html'</script>";
        
    }

else{

    $aisehi="hojayega shayad!!!";
	echo "<script>location.href='certificate.php'</script>";
    
}

?>