<?php
 
$conn =new mysqli("localhost","root","","students");
if($conn -> connect_error){
	echo "sorry connections";
}else{
   return $conn;
 }
 
?>