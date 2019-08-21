<?php
require("include/common.php");
if (!isset($_SESSION['email'])) {
   header('location: index.php');
}
       $em=$_SESSION['email'];	   
	
if(isset($_POST['subm']))
   {
    $l1 = $_POST['lats'];
    $l2 = $_POST['longs'];
    header("Location: nearest.php? lat=$l1&long=$l2");
   }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <?php include("include/headtag.php") ?>
  <meta charset="UTF-8">
  <title>Responsive Table</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
   .body{
    background-image: url("img/mybg4.jpg");
    width:100%;
    height:100%;
   }
</style>
</head>

<body class="body" onload="getLocation()">
<?php include("include/home_header.php"); ?>

<section class="cd-hero">
        <ul class="cd-hero-slider">  
            <li class="selected first-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                  
                    <div>
                     <h2>You can help someone</h2>
                     <h3>Please add FOOD Details here :</h3>
                     </div>
                    <div class="container">
            <div class="col-md-10 ">
	            <div class="col-md-5 col-md-offset-5">
                   <div class="panel panel-primary" >     
                      <div class="panel-body">

                      <?php include("login/user_display.php"); ?>

                    
                       </div>
                     </div>
                   </div>
                 </div>
              </div>
              </li>
              </ul>
              </section>
            



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="css/script.js"></script>

    <?php include("include/footer.php"); ?>
    <?php include("include/jscript.php"); ?>

</body>
</html>