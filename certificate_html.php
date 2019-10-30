<?php 

session_start();
$first_name=$_SESSION["first_name"];
$last_name=$_SESSION['last_name'];
$total=$_SESSION['html_percent'];


?>





<html>
<head>
  <title>Certificate</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="certificate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">




  
    <script language="javascript" type="text/javascript" >
          window.onload=func
          function func()
           {
            var first= <?php echo json_encode($first_name); ?>;
            var last= <?php echo json_encode($last_name); ?>;
            var total= <?php echo json_encode($total); ?>;

	          document.getElementById("total").innerHTML=total;
	          document.getElementById("first_name").innerHTML=first+" "+last;
	          document.getElementById("last_name").innerHTML=last;



            }
  




   </script>
  <script src="jquery.js"></script>

<script>
function printDiv(cert) {
     var printContents = document.getElementById(cert).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<style>

      #first_name, #last_name{
        text-transform: capitalize;
      }

</style>

</head>


<body>






<!--navbar-->
<div class="make">
<nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
  <a class="navbar-brand" href="#"><h1 id="label">Learn2code.com</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end make2" id="collapsibleNavbar">
    <ul class="navbar-nav nav-pills info" >
      <li class="nav-item about ">
        <a class="nav-link  " id="as" href="qwerty.html"><i class="fas fa-home"></i>HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="as"><i class="far fa-address-card"></i>ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="as"><i class="fas fa-phone-alt"></i>CONTACT</a>
      </li> 
      <li class="nav-item">
          <a class="nav-link" id="as" href="login_out.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
        </li> 
    </ul>
  </div>  
</nav>
</div>
<div class="container-fluid" style="color:darkred;" >
<div class="row first_row" id="first_row" style="height:1px;">

      </div>
  <div class="row">
    <div class="col-lg-4 bg-warning">
    <input type="button" onclick="printDiv('cert')" value="print a div!" />
    </div>
    
    <div class="col-lg-8 d-flex justify-content-center cert" id="cert" style="height:570px; background-image:url('cert.jpg'); background-size:100% 100%" >
      <div class="row" style="width:100%;">
<div class="outer-border col-lg-12 col-md-12 col-sm-12 col-xs-12" >
  <div class="inner-border col-lg-12 col-md-12 col-sm-12 col-xs-12 p-2">
  <div class="row"style="width:100%;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-2  d-flex justify-content-center">
      <h4 style="padding-left:100px;padding:20px;" >
        

            Learn2code.com
        
        
      </h4>
    </div>
  </div>
  <div class="row" style="width:100%;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center certificate">
      <h3 style="padding:5px;">
        <i>
          <u>
              Certificate of Completion
          </u>
            
        </i>
          
      </h3>
    </div>
  </div>
  <div class="row" style="width:100%;">
      <div class="col-lg-12 col-xs-12 d-flex justify-content-center">
        <h4 style="padding:20px;">
          
            
                  HTML
              

            
        </h4>
      </div>
    </div>
    <div class="row" style="width:100%;">
        <div class="col-lg-12 col-xs-12 d-flex justify-content-center">
          
            
            
                    is awarded to
                
  
              
          
        </div>
      </div>
      <div class="row" style="width:100%;">
          <div class="col-lg-12 col-xs-12 d-flex justify-content-center">
            <h4 style="padding:10px;">
             <u>
               <i>
             <p id="first_name"></p>
    </i>
             </u> 
            
            

                
            </h4>
          </div>
        </div>
        <div class="row" style="width:100%;">
          <div class="col-lg-12 col-xs-12 d-flex justify-content-center">
            <div style="display:flex;flex:wrap;">
            completed the course with the score of 
            </div>
            
            
        </div>
        <div class="row" style="width:100%;">
          <div class="col-lg-12 col-xs-12 d-flex justify-content-center">
          
            <h4 style="padding-top:10px;padding-left:10px;">
              <u>
                <i>
            <p id="total"></p>
    </i>
            </u>
            </h4>
            <h4 style="padding-top:10px;">
              <u>
                <i>
              /100
    </i>
              </u>
            </h4>
            
        </div>
  </div>
  <div class="row" style="width:100%;">
  </div>
</div>
</div>
    </div>
  </div>
</div>







</body>
</html>