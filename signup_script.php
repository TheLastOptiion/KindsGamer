<?php

require("include/common.php");


// Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  
  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);
  
  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);
  
  
  $house = $_POST['house'];
  $house = mysqli_real_escape_string($con, $house);
  
  $colony = $_POST['colony'];
  $colont = mysqli_real_escape_string($con, $colony);
  
  $pin = $_POST['pin'];
  $pin = mysqli_real_escape_string($con, $pin);
 
  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);
  
  $whatsapp = $_POST['whatsapp'];
  $whatsapp = mysqli_real_escape_string($con, $whatsapp);
  
  

  
  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

  

  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
    if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: note.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: note.php?m1=' . $m);
  } else {
   
    $query1 = "INSERT INTO users(email,password,name,house,colony,pin,contact,whatsapp) 
	                                                                   VALUES 
		      ('" . $email . "','" . $password . "','" . $name . "','" . $house . "','" . $colony . "'
			  ,'" . $pin . "','" . $contact . "','" . $whatsapp . "')";
				 
    mysqli_query($con, $query1) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;	
	$_SESSION['Name'] = $name;
    $_SESSION['user_id'] = $user_id;
    header('location: home.php');
  }
?>