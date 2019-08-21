<?php
require("include/common.php");
   if (!isset($_SESSION['email'])) {
       header('location: index.php');
      }
   $em=$_SESSION['email'];	   
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
<body class="body">

<?php include("include/home_header.php"); ?>

<div class="cd-hero">  
                <div class="cd-full-width">       
                    <div class="container">
                       <div class="col-md-11 ">
	                     <div class="col-md-5 col-md-offset-4">
                         <br>
                         <br>
                         <br>
                         <br>
                         <div>
                         <div>
                         <h3 style="color:white;"><center>Avaliable food near you</center></h3>
                        </div>
<?php

   $v1 = doubleval($_GET['lat']);
   $v2 = doubleval($_GET['long']);


//$sql = "SELECT id,(3959 * acos( cos( radians( $v1 )) * cos( radian( lat )) * cos( radians( lng ) - radians($v2)
  //      ) + sin(radians($v1)) * sin( radians( lat ) ) ) ) AS distance FROM markers HAVING diatnace < 55 ORDER BY distance LIMIT 0,60";

  $sql = "SELECT * from uploads ";
  $res = mysqli_query($con, $sql);
  $row = mysqli_num_rows($res);

  ?>

<table class="rwd-table">
  <tr>
    <th><center>Food Image</center></th>
    <th><center>Date/Time</center></th>
    <th><center>Description</center></th>
    <th><center>Name</center></th>
    <th><center>Contact No</center></th>
    <th><center>Address</center></th>
    <th><center>Distance</center></th>
  </tr>

  <?php

  while ($row = mysqli_fetch_array($res)) {

      
            $l1 =  $row['lat'];
            $l2 =  $row['log']; 
           
              $call = circle_distance($v1,$v2,$l1,$l2);
              
             
         
           if( $call <= 5 )
           {           
              ?>
                         <tr>
                              <td data-th="Food Image" >     <?php echo "<img src='uploaded images/".$row['image']."' >"; ?>               </td>
                              <td data-th="Upload time">     <?php echo "<h7>".$row['time']."</h7>"; ?>    
                              <td  data-th="Description">    <?php echo "<h7>".$row['description']."</h7>"; ?>                             </td>
                              <td data-th="Name">            <?php echo "<h7>".$row['name']."</h7>"; ?>                                    </td>
                              <td data-th="Contact no">      <?php echo "<h7>".$row['contact']."</h7>"; ?>                                 </td>
                              <td  data-th="Address"> 
                                                            <?php echo  "<h7>house no : ".$row['house'].",</h7>";?> 
                                                            <?php echo  "<h7>  ".$row['colony'].",</h7>";?>
                                                            <?php echo  "<h7>pin : ".$row['pin'].".</h7>"; ?>                              </td>
                              <td style="border-bottom:double 2px black;" data-th="Distance" >  <?php echo round($call,2); ?> Kilometers   </td>
                        </tr>
     
             <?php  
            }
        }
            
      
    function circle_distance($lat1, $lon1, $lat2, $lon2)
     {
        $rad = M_PI / 180;
        $distance =acos(sin($lat2*$rad) * sin($lat1*$rad) + cos($lat2*$rad) * cos($lat1*$rad) * cos($lon2*$rad - $lon1*$rad)) * 6371;// Kilometers
        // $km = $distance * 1.609344;
        return $distance; 
     }
       ?>
          </table>
          </div>
                   </div>
                 </div>
               </div>
            </div>
                </div>
            </div>                   
         </div>
               </li> 
             </ul>
  </body> 

<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="css/script.js"></script>

 <?php include("include/footer.php"); ?>
    <?php include("include/jscript.php"); ?>

</body>
</html>

