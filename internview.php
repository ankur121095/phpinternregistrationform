<?php 

// include "interndbcon.php";
// $id = $_GET ['v'];
// $a = "select * from internshiptable where id=$id";
// $b = mysqli_query($interndbcon,$a);
// $c = mysqli_fetch_array($b);
// echo "<pre>";
// print_r($c);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<center><h1 style="color: white; background: black;">View Data</h1></center>
	<table class="table table-bordered">
		<tr>
			<th>Student Id</th>
            <th>Student Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Address</th>
            <th>Gender</th>
            <th>College</th>
            <th>Qualifications</th>
            <th>Branch</th>
            <th>Semester</th>
            <th>Internship Course</th>
		</tr>
		<?php 
		include "interndbcon.php";
        $id = $_GET ['v'];
        $a = "select * from internshiptable where id=$id";
        $b = mysqli_query($interndbcon,$a);
        $c = mysqli_fetch_array($b);
		?>
		
		<tr>
			<td><?php echo $c['id'] ?></td>
			<td><?php echo $c['studentname'] ?></td>
			<td><?php echo $c['email'] ?></td>
			<td><?php echo $c['mobilenumber'] ?></td>
			<td><?php echo $c['address'] ?></td>
			<td><?php echo $c['gender'] ?></td>
			<td><?php echo $c['college'] ?></td>
			<td><?php echo $c['qualifications'] ?></td>
			<td><?php echo $c['branch'] ?></td>
			<td><?php echo $c['semester'] ?></td>
			<td><?php echo $c['internshipcourse'] ?></td>
		</tr>

		


	</table>
    </div>

</body>
</html>
<!-- <h1><?php echo $c['studentname']?></h1> -->