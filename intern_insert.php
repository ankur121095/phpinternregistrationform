<?php 

include "interndbcon.php";

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


$interndata = "insert into internshiptable(studentname,email,mobilenumber,address,gender,college,qualifications,branch,semester,internshipcourse)value('$studentname','$email','$mobilenumber','$address','$gender','$college','$qualifications','$branch','$semester','$internshipcourse')";

mysqli_query($interndbcon,$interndata);





?>