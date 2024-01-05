<?php 
$dbhost = 'delta.optiklink.com';
$dbuser = 'u126067_6YObtWKgqn';
$dbname = 's126067_student';
$dbpass = '!yQ4Q2@Da6BB!8VWIhLcKKMw';

 $dbconn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 if($dbconn){

    echo "success";
 }

?>