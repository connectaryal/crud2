<?php
ob_start();
include('konek.php');

$id = stripslashes($_GET['id']);

$sql = mysqli_query($db, "DELETE FROM `tblStudents` WHERE `studentID` = ".$id);

if($sql){
	header("Location: index.php");
}else{
	echo "<font color='red'>Error deleting data</font>";
}

?>
 <a href="index.php"> Back </a>