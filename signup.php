<?php
$first = $_POST['first'];
$last = $_POST['last'];
$email=$_POST['username'];
$password=$_POST['password'];
if (!empty($email) || !empty($password) || !empty($first) || !empty($last)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "internet_program";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From signupdata Where email = ? Limit 1";
     $INSERT = "INSERT Into signupdata (first_name,last_name,email, password) values(?,?,?,?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $first, $last,$email,$password);
      $stmt->execute();
      echo "<script>alert('Registration successful');</script>";
      echo "<script>location.href='login.html'</script>";

     } else {
        echo "<script>alert('Username already exists');</script>";
      echo "<script>location.href='signup.html'</script>";

      
     }
     $stmt->close();
     $conn->close();
    }
} else {
    echo "<script>alert('Registration unsuccessful, all field required');</script>";
 die();
}
?>