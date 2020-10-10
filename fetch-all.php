<?php 
header('Content-Type: application/json');
header('Acess-Control-Alow-Origin:*');
include 'connection.php';
$query = "select * from resistration";
$fire = mysqli_query($con, $query) or die('sql failed');
if(mysqli_num_rows($fire)>0){
$output = mysqli_fetch_all($fire, MYSQLI_ASSOC);
echo json_encode($output);
}
else{
	echo json_encode(array('massege'=>'no record fond','status'=>'false'));
}



 ?>