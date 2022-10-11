<?php
$base_url = "http://e-gift.otzo.com/";
$host = 'localhost';
$user = 'id8461391_scampage_kfc';
$pw = 'IniPassword!@#';
$db = 'id8461391_scampage_kfc';
$con = mysqli_connect($host, $user, $pw) or die(mysqli_error());
mysqli_select_db($con, $db) or die(mysqli_error());
