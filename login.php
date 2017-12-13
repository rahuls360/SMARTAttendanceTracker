<?php 
require "conn.php";
$roll_no = $_POST["roll_no"];
$subject_name = $_POST["subject_name"];
if($roll_no=="SUBJECT1" || $roll_no=="SUBJECT2" || $roll_no=="SUBJECT3" || $roll_no=="SUBJECT4" || $roll_no=="SUBJECT5")
{
	echo "Invalid Entry";
}
else{
	switch($subject_name){
		case "SUBJECT1": 
					$mysql_qry1 = "select * from attendance where rollNumber like '$roll_no'";
					$mysql_qry2 = "SELECT * FROM attendance WHERE rollNumber = 'SUBJECT1'";
					$result = mysqli_query($conn ,$mysql_qry1);
					$resultTotal = mysqli_query($conn,$mysql_qry2);
					if(mysqli_num_rows($result) > 0) 
					{
						$row = mysqli_fetch_assoc($result);
						$attend = $row["classesAttended1"];
						$row2 = mysqli_fetch_assoc($resultTotal);
						$attend2 = $row2["classesAttended1"];
					echo "Attendance is " . $attend . " of " . $attend2 . " classes for SUBJECT1";
					}
					else 
					{
					echo "Student doesn't exists";
					}	
					break;
		case "SUBJECT2": 
					$mysql_qry1 = "select * from attendance where rollNumber like '$roll_no'";
					$mysql_qry2 = "SELECT * FROM attendance WHERE rollNumber = 'SUBJECT2'";
					$result = mysqli_query($conn ,$mysql_qry1);
					$resultTotal = mysqli_query($conn,$mysql_qry2);
					if(mysqli_num_rows($result) > 0) 
					{
						$row = mysqli_fetch_assoc($result);
						$attend = $row["classesAttended2"];
						$row2 = mysqli_fetch_assoc($resultTotal);
						$attend2 = $row2["classesAttended2"];
					echo "Attendance is " . $attend . " of " . $attend2 . " classes for SUBJECT2";
					}
					else 
					{
					echo "Student doesn't exists";
					}
					break;
		case "SUBJECT3": 
					$mysql_qry1 = "select * from attendance where rollNumber like '$roll_no'";
					$mysql_qry2 = "SELECT * FROM attendance WHERE rollNumber = 'SUBJECT3'";
					$result = mysqli_query($conn ,$mysql_qry1);
					$resultTotal = mysqli_query($conn,$mysql_qry2);
					if(mysqli_num_rows($result) > 0) 
					{
						$row = mysqli_fetch_assoc($result);
						$attend = $row["classesAttended3"];
						$row2 = mysqli_fetch_assoc($resultTotal);
						$attend2 = $row2["classesAttended3"];
					echo "Attendance is " . $attend . " of " . $attend2 . " classes for SUBJECT3";
					}
					else 
					{
					echo "Student doesn't exists";
					}
					break;
		case "SUBJECT4": 
					$mysql_qry1 = "select * from attendance where rollNumber like '$roll_no'";
					$mysql_qry2 = "SELECT * FROM attendance WHERE rollNumber = 'SUBJECT4'";
					$result = mysqli_query($conn ,$mysql_qry1);
					$resultTotal = mysqli_query($conn,$mysql_qry2);
					if(mysqli_num_rows($result) > 0) 
					{
						$row = mysqli_fetch_assoc($result);
						$attend = $row["classesAttended4"];
						$row2 = mysqli_fetch_assoc($resultTotal);
						$attend2 = $row2["classesAttended4"];
					echo "Attendance is " . $attend . " of " . $attend2 . " classes for SUBJECT4";
					}
					else 
					{
					echo "Student doesn't exists";
					}	
					break;
		case "SUBJECT5": 
					$mysql_qry1 = "select * from attendance where rollNumber like '$roll_no'";
					$mysql_qry2 = "SELECT * FROM attendance WHERE rollNumber = 'SUBJECT5'";
					$result = mysqli_query($conn ,$mysql_qry1);
					$resultTotal = mysqli_query($conn,$mysql_qry2);
					if(mysqli_num_rows($result) > 0) 
					{
						$row = mysqli_fetch_assoc($result);
						$attend = $row["classesAttended5"];
						$row2 = mysqli_fetch_assoc($resultTotal);
						$attend2 = $row2["classesAttended5"];
					echo "Attendance is " . $attend . " of " . $attend2 . " classes for SUBJECT5";
					}
					else 
					{
					echo "Student doesn't exists";
					}	
					break;
	}
}
?>