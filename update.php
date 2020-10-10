<?php 
header('Content-Type: application/json');
header('Acess-Control-Alow-Origin:*');
header('Acess-Control-Alow-Methods:POST');
header('Acess-Control-Alow-Headers:Acess-Control-Alow-Headers,Content-Type,Acess-Control-Alow-Methods,Authrization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);
$empid = $data['eid'];
$empname = $data['ename'];
$empemail = $data['eemail'];

$empcontact = $data['econtact'];

$emppass = $data['epass'];
$empcpass = $data['ecpass'];


include 'connection.php';
$query = "UPDATE `resistration` SET `Name`='$empname',`Email`='$empemail',`Contact`='$empcontact',`Password`='$emppass',`C_password`='$empcpass' WHERE Id = '$empid'";
if(mysqli_query($con, $query)){
echo json_encode(array('massege'=>' record updated','status'=>'True'));
}
else{
	echo json_encode(array('massege'=>'record not updated','status'=>'false'));
}



 ?>