<?php

	include("connD.php");
	$ID = $_POST["id"];
	$Name =  $_POST["name"];
	$Age =  $_POST["age"];
	//$Image =  $_POST["img"];
	$DateBirthday = $_POST["date_birthday"]; 

		 
		$sql = "UPDATE student SET name='$Name' ,age='$Age',date_birthday='$DateBirthday' WHERE id='$ID';";
		
		if($conn ->query($sql) === TRUE){
			
			 
			 $item["Name"] =$Name;
			 $item["Age"] =$Age;
			 //$item["Img"] =$Image;
            $item["Date_Birthday"] =$DateBirthday;

			 
             $products[] = $item;
            $product["Error"] = false;
            $product["message"]= "Student Info updated successfully";
			 
			 
 echo json_encode($product);
		}else{
            
            
             
			 $item["Name"] ="no data";
			 $item["Age"] =0;
			// $item["Img"] ="no data";
            $item["Date_Birthday"] ="no data";

			 
             $products[] = $item;
            $product["Error"] = true;
            $product["message"]= "something goes worng - Student Info not updated correctly!";
			
			
				
				echo json_encode($product);
				
		}
	
?>