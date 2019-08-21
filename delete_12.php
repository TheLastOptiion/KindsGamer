<?php

require("include/common.php");

$query =" TRUNCATE TABLE uploads ";

$result = mysqli_query($con, $query);

mysqli_close($con);

?>