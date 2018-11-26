<?php
  if($_POST["email"]=="root@gmail.com" && $_POST["password"]=="root")
  	{ header("Location:adminfile/index.php");}
  else 
  	echo "admin email and password invalid!";
  




?>