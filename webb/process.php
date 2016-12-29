<?php
   
   $myFile = "data.json";
   $arr_data = array(); 

  try
  {
	   //Get form data
	   $formdata = array(
	      'Name'=> $_POST['name'],
	      'RollNo'=> $_POST['rno'],
	      'Fname'=>$_POST['fname'],
	      'Sex'=> $_POST['sex'],
	      'Email'=> $_POST['email'],
	      'Qualification'=> $_POST['qua'],
	      'Phone'=>$_POST['phn'],
	      'Address'=> $_POST['addr']
	   );

	   $jsondata = file_get_contents($myFile);

	   $arr_data = json_decode($jsondata, true);

	   array_push($arr_data,$formdata);

	   $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
	   
	
	   if(file_put_contents($myFile, $jsondata)) {
	        echo "<form action='add.html' method='POST'><h1>Sucessfully added</h1><br><input type='submit' value='Ok'>";
	    }
	   else 
	        echo "error";

   }
   catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
   }

?>