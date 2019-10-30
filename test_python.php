<?php
session_start();

  $first=$_POST['f1'];
  $second=$_POST['f2'];
  $third=$_POST['f3'];
  $fourth=$_POST['f4'];
  $fifth=$_POST['f5'];
  
  $total=0;

  
    if ($first==4){
      $total=$total+1;
    }
    if ($second==4){
      $total=$total+1;
    }
    if ($third==4){
      $total=$total+1;
    }
    if ($fourth==4){
      $total=$total+1;
    }
    if ($fifth==4){
      $total=$total+1;
    }
    $_SESSION['total']=$total;
    
    echo "<script>location.href='confirm_submission.html'</script>";


?>