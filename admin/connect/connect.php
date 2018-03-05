<?php 
  $conn = mysqli_connect("localhost", "root", "", "library");

  if (!$conn) {
  	echo "connection error".mysqli_connect_error();
  }
?>