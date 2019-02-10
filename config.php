<?php
error_reporting(E_ALL ^ E_WARNING); 
$con=mysqli_connect("localhost","root","","test");
if (!$con) {
	# code...
	die("Not Connected");
}
$name=$_POST['fullName'];
$email=$_POST['email'];
$phone=$_POST['contactNo'];
$msg=$_POST['message'];
$sql="Insert into msg_tbl(name,email,contact_no,msg) values('$name','$email',$phone,'$msg')";
$r=mysqli_query($con,$sql);
$arr=array();
 if($r>0){
	# code...
	$arr["msg"]="Success";
		# code...
		//echo "DATA entered Successfully";
		//print_r( json_encode($key));
}
else{
	$arr["msg"]="Failed";
}

echo json_encode($arr);
?>