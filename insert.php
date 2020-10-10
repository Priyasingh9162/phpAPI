<?php 
header('Content-Type: application/json');
header('Acess-Control-Alow-Origin:*');
header('Acess-Control-Alow-Methods:POST');
header('Acess-Control-Alow-Headers:Acess-Control-Alow-Headers,Content-Type,Acess-Control-Alow-Methods,Authrization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);
$empname = $data['ename'];
$empemail = $data['eemail'];

$empcontact = $data['econtact'];

$emppass = $data['epass'];
$empcpass = $data['ecpass'];


include 'connection.php';
$query = "INSERT INTO `resistration`(`Name`, `Email`, `Contact`, `Password`, `C_password`) VALUES ('$empname','$empemail','$empcontact','$emppass','$empcpass')";
if(mysqli_query($con, $query)){
echo json_encode(array('massege'=>' record inserted','status'=>'True'));
}
else{
	echo json_encode(array('massege'=>'record not inserted','status'=>'false'));
}



 ?>