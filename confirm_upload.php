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
<body>

<?php include("include/home_header.php"); ?>

<section class="cd-hero">
        <ul class="cd-hero-slider autoplay">  
            <li class="selected first-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">     
                    </div>


  <h2>Thanks for adding your waste food .</h2>
  <h3>It may help someone also save your food from getting waste.</h3>
  <br><br>
  <button type="submit" class="btn btn-primary"><a style="color:white;"href="home.php">Back to home</a></button>
</div>
</li>
</ul>
</section>


    <?php include("include/footer.php"); ?>
    <?php include("include/jscript.php"); ?>


</body>
</html>