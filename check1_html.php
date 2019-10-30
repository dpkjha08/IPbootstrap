<?php
session_start();

    if ($_SESSION['html_attempt']==0){
	echo "<script>location.href='test_html.html'</script>";
        
    }

else{

    $aisehi="hojayega shayad!!!";
	echo "<script>location.href='certificate_html.php'</script>";
    
}

?>