<?php
session_start();

    if ($_SESSION['ruby_attempt']==0){
	echo "<script>location.href='test_ruby.html'</script>";
        
    }

else{

    $aisehi="hojayega shayad!!!";
	echo "<script>location.href='certificate_ruby.php'</script>";
    
}

?>