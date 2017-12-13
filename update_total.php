<?php 
require "conn.php";
$subject_name = $_GET["subject_name"];
switch($subject_name){
	case "SUBJECT1":
					$sql = "UPDATE attendance SET classesAttended1 = classesAttended1 + 1 WHERE rollNumber = 'SUBJECT1'";
					$result = mysqli_query($conn,$sql);
					$result;
					echo $result;
					break;
	case "SUBJECT2":
					$sql = "UPDATE attendance SET classesAttended2 = classesAttended2 + 1 WHERE rollNumber = 'SUBJECT2'";
					$result = mysqli_query($conn,$sql);
					$result;
					echo $result;
					break;
	case "SUBJECT3":
					$sql = "UPDATE attendance SET classesAttended3 = classesAttended3 + 1 WHERE rollNumber = 'SUBJECT3'";
					$result = mysqli_query($conn,$sql);
					$result;
					echo $result;
					break;
	case "SUBJECT4":
					$sql = "UPDATE attendance SET classesAttended4 = classesAttended4 + 1 WHERE rollNumber = 'SUBJECT4'";
					$result = mysqli_query($conn,$sql);
					$result;
					echo $result;
					break;
	case "SUBJECT5":
					$sql = "UPDATE attendance SET classesAttended5 = classesAttended5 + 1 WHERE rollNumber = 'SUBJECT5'";
					$result = mysqli_query($conn,$sql);
					$result;
					echo $result;
					break;
	default: 		echo "Invalid subject";
					break;
}
//http://192.168.1.7/update_total.php?subject_name=SUBJECT5
?>

