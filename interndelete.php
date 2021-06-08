<?php 

include "interndbcon.php";
$id = $_GET['i'];
$a = "delete from internshiptable where id = $id";
mysqli_query($interndbcon,$a);
header('location:interndisplay.php');




?>