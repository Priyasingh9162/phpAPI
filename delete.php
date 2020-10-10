<?php 
header('Content-Type: application/json');
header('Acess-Control-Alow-Origin:*');
header('Acess-Control-Alow-Methods:POST');
header('Acess-Control-Alow-Headers:Acess-Control-Alow-Headers,Content-Type,Acess-Control-Alow-Methods,Authrization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);
$empid = $data['eid'];


include 'connection.php';
$query = "DELETE FROM `resistration` WHERE Id = '$empid'";
if(mysqli_query($con, $query)){
echo json_encode(array('massege'=>' record deleted','status'=>'True'));
}
else{
	echo json_encode(array('massege'=>'record not deleted','status'=>'false'));
}



 ?>