<?php
		include("connD.php");
          $ID = $_POST["id"];
		  
	  $sql = "DELETE FROM student WHERE id = '$ID'";
	
	if($conn -> query($sql) === TRUE){
		
		
		
		 //echo "the record deleted successfully :)";
		 
				$product["Error"] = false;
				$product["message"]= "Student Deleted successfully";
				
				echo json_encode($product);
	}else{
		
		
		//echo "Error: ".$sql."<br>".$conn ->error;
		
		        $product["Error"] = true;
				$product["message"]= "something goes wrong delete Student!";
				
				echo json_encode($product);
	}
		
	
	
	

?>