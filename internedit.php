<?php

include "interndbcon.php";
$id = $_GET['a'];
$s  = "select * from internshiptable where id=$id";
$p  = mysqli_query($interndbcon,$s);
$f  = mysqli_fetch_array($p);

// echo "<pre>";
// print_r($f);
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Internship Registration Form</title>
	<style>
	    *{
	    	margin: 0;
	    	padding: 0;
	    	/*background: black;*/
	    }
	    .container{
	    	width: 45%;
	    	height: 1225px;
	    	/*border: 1px solid white;*/
	    	float: left;
	    	padding-left: 70px;
	    	background: black;
	    }
	    .innercontainer{
	    	width: 88%;
	    	height: 1075px;
	    	border: 1px solid white;
	    	margin-left: -50px;
	    	margin-top: 30px;
	    	background: white;
	    }
	    .innercontainer h1{
	    	font-family: "Source Sans Pro", sans-serif;
	    	text-align: center;
	    	padding-top: 21px;
	    }
	    .innercontainer p{
	    	font-family: "Source Sans Pro", sans-serif;
	    	padding-left: 20px;
	    }
	    .innercontainer input{
	    	margin-left: 20px;
	    	width: 90%;
	    	height: 28px;
	    }

    </style>
</head>
<body>

<!-- container div start -->
<div class="container">
	<p style="padding-top: 32px; color: white; font-size: 32px; padding-left: 66px;">Do Summer Internship From Home!.</p>
    <p style="color: white; padding-top: 10px; padding-left: 66px;">Once you"re registered, you can:</p>
    <p style="color: white; padding-top: 21px; padding-left: 66px;">In Case any query, Kindly Contact: 7000846823</p><br>
    <hr style="color: white; width: 700px; margin-left: 65px;">
    <img src="https://internship2021.pninfosys.com/image/banner3.jpg" style="width: 617px; height: 860px; padding-left: 66px; padding-top: 13px;">
    <p style="color: white; padding-left: 66px; padding-top: 20px; font-size: 20px;">Learn from the comfort of your home</p>
    <p style="color: white; padding-top: 20px; padding-left: 66px;">work-from-home transformational program aimed at building the leaders of tomorrow. Any college student from any degree, stream, and year of study can apply for this program.</p>
</div>

<div class="container">

    <form class="innercontainer" method="post" action="internupdate.php">
    	
    	<h1 style="color: #009df2; ">Registration Form 2021</h1><br>
    	<input type="text" name="id" value="<?php echo $f['id'] ?>">
    	<p>Student Name</p>
    	<br>
    	<input type="text" name="studentname" value="<?php echo $f['studentname'] ?>">
    	<br><br>
    	<p>Email</p>
    	<br>
    	<input type="text" name="email" value="<?php echo $f['email'] ?>">
    	<p style="font-size: 13px;">We"ll never share your email with anyone else.</p>
    	<br>
    	<p>Mobile Number</p>
    	<br>
    	<input type="text" name="mobilenumber" value="<?php echo $f['mobilenumber'] ?>">
    	<br><br>
    	<p>Address</p>
    	<br>
    	<textarea style="margin-left: 20px; width: 90%; height: 75px;" name="address"><?php echo $f['address'] ?></textarea>
    	<br>
    	<br>
    	<p>Gender</p>
    	<br>
    	<input type="radio" name="gender" value="Male" style=" margin-left: 19px; height: 15px; width: 15px; float: left;">
    	<p> Male
    	</p>
    	<br>
    	<input type="radio" name="gender" value="Female" style=" margin-left: 19px; height: 15px; width: 15px; float: left;">
    	<p> Female
    	</p>
    	<br>
    	<p>College</p>
    	<br>
    	<select name="college" style="margin-left: 19px; width: 90%; height: 28px;">
    		<option>RJIT</option>
    		<option>SHRIRAM</option>
    		<option>ITM</option>
    		<option>MITS</option>
    		<option>MPCT</option>
    		<option>OTHERS</option>
    	</select>
    	<br><br>
    	<p>Qualifications</p>
    	<br>
    	<select name="qualifications" style="margin-left: 19px; width: 90%; height: 28px;">
    		<option>B.Tech</option>
    		<option>BCA</option>
    		<option>MCA</option>
    		<option>B.Sc</option>
    		<option>OTHERS</option>
    	</select>
    	<br><br>
    	<p>Branch</p>
    	<br>
    	<select name="branch" style="margin-left: 19px; width: 90%; height: 28px;">
    		<option>C.S.E</option>
    		<option>I.T.</option>
    		<option>E.E.</option>
    		<option>E.C.</option>
    		<option>MECHANICAL</option>
    		<option>CIVIL</option>
    		<option>AUTOMOBILE</option>
    		<option>OTHERS</option>
    	</select>
    	<br><br>
    	<p>Semester</p>
    	<br>
    	<select name="semester" style="margin-left: 19px; width: 90%; height: 28px;">
    		<option>Ist Semester</option>
    		<option>IInd Semester</option>
    		<option>IIIrd Semester</option>
    		<option>IVth Semester</option>
    		<option>Vth Semester</option>
    		<option>VIth Semester</option>
    		<option>VIIth Semester</option>
    		<option>VIIIth Semester</option>
    	</select>
    	<br><br>
    	<p>Internship Course</p>
    	<br>
    	<select name="internshipcourse" style="margin-left: 19px; width: 90%; height: 28px;">
    		<option>Web Designing Internship Course (60 Days)</option>
    		<option>Web Development Internship Course (120 Days)</option>
    		<option>PHP</option>
    		<option>Laravel 8</option>
    		<option>Angular 11</option>
    		<option>Python</option>
    		<option>Django</option>
    	</select>
    	<br><br>
    	<button class="btn btn-info">Update</button>

    </form>	

</div>
<!-- container div end -->

</body>
</html>