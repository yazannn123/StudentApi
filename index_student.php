 <?php
include("connD.php");
  if(isset($_GET["key"])){
        $keyS = $_GET["key"];
        
         $sqlSelect = "select * from student WHERE name LIKE '%$keyS%'";
	    $result = $conn -> query($sqlSelect);
	 
	 if($result -> num_rows>0){
		 
		 while($row = $result -> fetch_assoc()){
			 $item["Id"]=$row["id"];
			 $item["Name"] = $row["name"];
			 $item["Age"] = $row["age"];
			 $item["Img"] = $row["img"];
              $item["Date_Birthday"] = $row["date_birthday"];
			 
			 $products[] = $item;
		  }
		  
		   echo json_encode($products);
		 
		 
		 
	 }else{
		 	 $item["Id"]=0;
		     $item["Name"] = "NO DATA";
			 $item["Age"] = 0;
			 $item["Img"] = "NO DATA";
            $item["Date_Birthday"] = "NO DATA";

			  $products[] = $item;
			    echo json_encode($products);
		 
	 }
	 
        
        
    }else{
         
	 $sqlSelect = "select * from student";
	 $result = $conn -> query($sqlSelect);
	 
	 if($result -> num_rows>0){
		 
		 while($row = $result -> fetch_assoc()){
			 	  $item["Id"]=$row["id"];
			 $item["Name"] = $row["name"];
			 $item["Age"] = $row["age"];
			 $item["Img"] = $row["img"];
            $item["Date_Birthday"] = $row["date_birthday"];

			 
			 $products[] = $item;
		  }
		  
		   echo json_encode($products);
		 
		 
		 
	 }else{
		 	 $item["Id"]=0;
		     $item["Name"] = "NO DATA";
			 $item["Age"] = 0;
			 $item["Img"] = "NO DATA";
            $item["Date_Birthday"] = "No DATAs";

			  $products[] = $item;
			    echo json_encode($products);
		 
	 }
	 
        
        
    }
	 
	 

	 

  

?>



 