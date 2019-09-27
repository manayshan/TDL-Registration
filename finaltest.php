<?php

$rollno = $_POST['rollno'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$fathername = $_POST['fathername'];
$course = $_POST['course'];
$school = $_POST['school'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$presentaddress = $_POST['presentaddress'];
$permanentaddress = $_POST['permanentaddress'];
$tdlschool = $_POST['tdlschool'];
$tdlcourse = $_POST['tdlcourse'];
$reasontoOpt = $_POST['reasontoOpt'];

if( !empty($rollno) || !empty($firstname) || !empty($lastname) || !empty($fathername) || !empty($course) || !empty($school) || !empty($email) || !empty($mobileno) || !empty($presentaddress) || !empty($permanentaddress) || !empty($tdlschool) || !empty($tdlcourse) || !empty($reasontoOpt) ){
	#code..
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "test";

	//create connection..
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

	if(mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());}
	else{
		$SELECT = "SELECT email from register where email = ? Limit 1";
		$INSERT = "INSERT into finaltdl (rollno, firstname, lastname, fathername, course, school, email, mobileno, presentaddress, permanentaddress, tdlschool, tdlcourse, reasontoOpt) values (?,?,?,?,?,?,?,?,?,?,?,?,?)";
		//Prepare statement...
		$stmt = $conn ->prepare($SELECT);
		$stmt ->bind_param("s", $email);
		$stmt ->execute();
		$stmt ->bind_result($email);
		$stmt ->store_result(); 
		$rnum = $stmt -> num_rows();

		if ($rnum==0){
			$stmt ->close();

			$stmt = $conn->prepare($INSERT);
			$stmt ->bind_param("sssssssssssss", $rollno, $firstname, $lastname, $fathername, $course, $school, $email, $mobileno, $presentaddress, $permanentaddress, $tdlschool, $tdlcourse, $reasontoOpt);
			$stmt ->execute();
			echo "New record inserted successfully";
		}else{
			echo "Someone already register using this email";
		}
		$stmt ->close();
		$conn ->close();
	}
}else{
	echo "All Fields are required";
	die();
}
?>