<?php
   
		  $Name= $_POST['name'];
	      $RollNo= $_POST['rno'];
	      $Fname=$_POST['fname'];
	      $Sex= $_POST['sex'];
	      $Email=$_POST['email'];
	      $Qualification= $_POST['qua'];
	      $Phone=$_POST['phn'];
	      $Address= $_POST['addr'];
    
	   $data = array(
	      'Name'=> $Name,
	      'RollNo'=> $RollNo,
	      'Fname'=>$Fname,
	      'Sex'=> $Sex,
	      'Email'=> $Email,
	      'Qualification'=> $Qualification,
	      'Phone'=>$Phone,
	      'Address'=> $Address
	   );
print_r($data);
	   
$inp = file_get_contents('data.json');
$tempArray = json_decode($inp);
array_push($tempArray, $data);
$jsonData = json_encode($tempArray);
file_put_contents('data.json', $jsonData);
if(file_put_contents('data.json', $jsonData))
{ echo "successfully_inserted..!";
}
else
{echo "error";}
{echo "error";}

header("location:add.html?msg=$msg");

?>
