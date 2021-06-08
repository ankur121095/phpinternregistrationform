<?php 

include "interndbcon.php";
$id = $_POST['id'];
$studentname = $_POST['studentname'];
$email = $_POST['email'];
$mobilenumber = $_POST['mobilenumber'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$college = $_POST['college'];
$qualifications = $_POST['qualifications'];
$branch = $_POST['branch'];
$semester = $_POST['semester'];
$internshipcourse = $_POST['internshipcourse'];

// echo $studentname, $email, $mobilenumber, $address, $gender, $college, $qualifications,$branch, $semester, $internshipcourse;

$data = "update internshiptable SET studentname = '$studentname', email = '$email', mobilenumber = '$mobilenumber', address = '$address', gender = '$gender', college = '$college', qualifications = '$qualifications', branch = '$branch', semester = '$semester', internshipcourse = '$internshipcourse' where id = $id";
mysqli_query($interndbcon,$data);
header('location: interndisplay.php');
?>