<?php

require("include/common.php");

  // header("Location: upload_script.php? lat=$l1&long=$l2");

  $lat = $_POST['lati'];
  $long = $_POST['longi'];
  $em = $_SESSION['email'];
  $house = $_SESSION['house'];
  $colony = $_SESSION['colony'];
  $pin = $_SESSION['pin'];
  $contact = $_SESSION['contact'];
  $name = $_SESSION['name'];
  $description = $_POST['description'];
  $description = mysqli_real_escape_string($con, $description);
  
  	$image = $_FILES['image']['name'];	
  	// image file directory
  	$target = "uploaded images/".$image;

  	$sql = "INSERT INTO uploads (image, description,name,email,contact,house,colony,pin,lat,log) VALUES ('" . $image . "','" . $description . "','" . $name . "','" . $em . "','" . $contact . "','" . $house . "','" . $colony . "','" . $pin . "','" . $lat . "','" . $long . "')";
      // execute query
    mysqli_query($con, $sql) or die(mysqli_error($con));

  	move_uploaded_file($_FILES['image']['tmp_name'], $target);
   
      // $result = mysqli_query($con, "SELECT * FROM uploads");
    header("location: confirm_upload.php? lat=$l1&long=$l2");
 
?>