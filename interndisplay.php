<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<table class="table table-bordered">
			<h1 class="bg-info text-center">Data Display</h1>
			<tr>
				<th>Id</th>
				<th>Student Name</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Action</th>
			</tr>

			<?php

			include "interndbcon.php";
			$a = "select * from internshiptable";
			$internresult = mysqli_query($interndbcon,$a);
			while($interndata = mysqli_fetch_array($internresult))
			{
			?>
			<tr>
				<td><?php echo $interndata['id'] ?></td>
				<td><?php echo $interndata['studentname'] ?></td>
				<td><?php echo $interndata['email'] ?></td>
				<td><?php echo $interndata['mobilenumber'] ?></td>
				<td>
					<a href="internview.php?v=<?php echo $interndata['id'] ?>" class="btn btn-info">View</a>
					<a href="internedit.php?a=<?php echo $interndata['id'] ?>" class="btn btn-info">Edit</a>
					<a href="interndelete.php?i=<?php echo $interndata['id'] ?>" class="btn btn-info">Delete</a>
				</td>
			</tr>
			<?php
			} 
			?>







		</table>
	</div>

</body>
</html>