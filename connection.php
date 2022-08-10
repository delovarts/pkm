<?php
$db = new mysqli("localhost","root","","puskesmas");

if ($db->connect_error) {
	echo "error";
	}
?>