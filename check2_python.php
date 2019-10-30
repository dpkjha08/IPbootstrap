<?php
session_start();
$first_name=$_SESSION["first_name"];
$last_name=$_SESSION['last_name'];
$email=$_SESSION['email'];
$password=$_SESSION['password'];
echo $_SESSION['total'];
$total=($_SESSION['total']/5)*100;
echo $first_name;
echo "<br>";
echo $total;
echo"<br>";

$con=mysqli_connect("localhost","root","","internet_program");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `signupdata` WHERE `email`='$email' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1){
    $_SESSION['log']=1;
    $row=mysqli_fetch_row($result);
    $_SESSION['python_attempt']=$row[4];
    $_SESSION['python_percent']=$row[5];
    $_SESSION["email"]=$row[2];
    echo"<br>";
    echo "attempt is: ".$_SESSION['python_attempt']."/1";
    echo"<br>";
    echo "attempt is: ".$_SESSION['email'];
    echo "<br><br>";



}

$python_attempt=$_SESSION['python_attempt'];

if ($python_attempt==1){
    echo "<script> location.href='certificate.php'</script>";

}
else{
    mysqli_query($con,"UPDATE `signupdata` set `python_attempt`=1 where `email`='$email' ");
   mysqli_query($con,"UPDATE `signupdata` set `python_percent`= '$total' where `email`='$email' ");
   $result= mysqli_query($con,"SELECT * FROM `signupdata` WHERE `email`='$email' && `password`='$password'");
    if($count==1){
        $_SESSION['log']=1;
       $row=mysqli_fetch_row($result);
        $_SESSION['python_attempt']=$row[4];
        $_SESSION['python_percent']=$row[5];
        $_SESSION["email"]=$row[2];
        
    echo "<script> location.href='certificate.php'</script>";

        

    }



    
   
}

?>