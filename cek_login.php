<?php
// start session
session_start();

// mengecek dan mendapatkan SESSION status
if (isset($_SESSION['status'])) {
	$sessionStatus=$_SESSION['status'];
}
else{
	$sessionStatus=false;
}

?>