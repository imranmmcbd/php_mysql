<?php
	include 'connect.php';
	$Studentid = $_POST['studentid'];
	$Fullname = $_POST['fullname'];
	$Section = $_POST['section'];
	$Year = $_POST['year'];
	$Mobile = $_POST['mobile'];
	$Invoice = $_POST['invoice'];
	$Trxid = $_POST['trxid'];

	$sql = "INSERT INTO studentinfo (Studentid, Fullname, Section, Year, Mobile, Invoice, Trxid) VALUES ('$Studentid', '$Fullname', '$Section','$Year','$Mobile','$Invoice','$Trxid')";
	if(!mysqli_query($conn,$sql)){
		echo 'Not Inserted';
	}
	else{
		echo 'Thank You your data is Sucessfully Inserted';
	}
	header("refresh:2; url=../index.php");

 ?>