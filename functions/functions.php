<?php
 include 'connect/connect.php';


function login($user_id){
	$_SESSION['id'] = $user_id;
}


?>