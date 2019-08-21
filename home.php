<?php
 
require("include/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
       $em=$_SESSION['email'];	   
	
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("include/headtag.php") ?>
    </head>
<style>
 
    #custom-button {
      width:200px;
  padding: 10px;
  color: black;
  background-color: #009578;
  border: 1px solid #000;
  border-radius: 10px;
  cursor: pointer;

}

#custom-button:hover {
  background-color: #00b28f;
}

#custom-text {
  font-family: sans-serif;
  color: #aaa;
}

</style>
</head>
<body onload="getLocation()">

<script type="text/javascript">  
    function getLocation(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);
        }
    }
      
      function showPosition(position)
      {
       document.getElementById("latii").value=+position.coords.latitude;
       document.getElementById("longii").value=+position.coords.longitude;
      }

</script>

      <?php include("include/home_header.php"); ?> 
      <?php include("home/u_home.php"); ?>
      <?php include("include/footer.php"); ?>
      <?php include("include/jscript.php"); ?>

   <script>
        const realFileBtn = document.getElementById("real-file");
        const customBtn = document.getElementById("custom-button");
        const customTxt = document.getElementById("custom-text");

        customBtn.addEventListener("click", function() {
        realFileBtn.click();
         });

        realFileBtn.addEventListener("change", function() {
        if (realFileBtn.value) {
        customTxt.innerHTML = realFileBtn.value.match(
        /[\/\\]([\w\d\s\.\-\(\)]+)$/
        )[1];
        } else {
        customTxt.innerHTML = "No file chosen, yet.";
       }
      });
  </script>

</body>
</html>