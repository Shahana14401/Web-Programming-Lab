<html>
	<head>
	<title>Delete Book</title>
	<style>
	input[type=text], input[type=number]
	{
	width:100%;
	}
	body {
 	 background-image: url('book1.jpg');
	 background-repeat: no-repeat;
	background-attachment: fixed;
        background-size: cover;	
	}
	</style>
<body>

<center><br><br>
<form method="POST">
	<table align="center" cellpadding='8' width="50%" border>
	<tr>
	<th colspan="2"><center>Delete BOOK</center></th>
	</tr>
	<tr>
	<td><b>Enter Book Title:</b></td>
	<td><input type="text" name="title"></td>
	</tr>
	<tr>
	<td colspan="2"><center><input type="submit" value="Delete" name="delete"></center></td>
	</tr>
	</form>
	<form action="home1.php">
	<tr>
	<td colspan="2"><center><input type="submit" value="Home"name="home"></center></td>
	</tr>
	</table>
	</form>
</html>

<?php
	include'conn.php';
	if(isset($_POST["delete"]))
	{
	$title1=$_POST['title'];
 	$sql_3="DELETE FROM book WHERE title='$title1'";
 	$result_3=mysqli_query($conn,$sql_3);
 	if(!$result_3)
 	{
 	 $msg="Error !!!".mysqli_error($conn);
 	}
 	else
	{
 	echo"deletion success!!!";
	}
	}
	
	
	mysqli_close($conn);
	?>