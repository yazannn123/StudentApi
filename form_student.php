<?php
include("connD.php");

$name=$_POST['name'];
$age=$_POST['age'];
$img=$_POST['img'];
$date=$_POST['date_birthday'];

 
    $sqlInsert="INSERT INTO student (name,age,img,date_birthday) VALUES ('$name','$age','$img','$date')";
    if($conn -> query($sqlInsert)==true){
        saveInJson(false,"Insert for successfully");
 
    }else{
        saveInJson(true,"Insert for Fail");
        
        
    }
    
 


function saveInJson($error,$message){
       $student["Error"]=$error;
		 $student["message"]=$message;
        echo json_encode($student);
}







?>