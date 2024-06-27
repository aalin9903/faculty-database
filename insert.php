<!doctype html>
<html lang="en">
<?php
	require "include/header.php";
	require "include/dbconnect.php";
?>

<div>
   <table style="width:77%;border:1px #07294d solid;" align="center">
   <tr><td style="background:#07294d;color:white;padding-left:10px;" colspan=2>Faculty Registration</td></tr>
   <tr><td>
   <?php
	if(!empty($_POST['Faculty_name'])&&!empty($_POST['Date_of_birth'])&&!empty($_POST['Email'])&&!empty($_POST['Date_of_joining'])&&!empty($_POST['Salary'])&&!empty($_POST['Designation'])&&!empty($_POST['Gender'])&&!empty($_POST['Qualification'])&&!empty($_POST['Mobile'])&&!empty($_POST['Address']))
	{
		$name=$_POST['Faculty_name'];
		$dob=$_POST['Date_of_birth'];
		$email=$_POST['Email'];
		$doj=$_POST['Date_of_joining'];
		$salary=$_POST['Salary'];
		$designation=$_POST['Designation'];
		$gender=$_POST['Gender'];
		$qualification=$_POST['Qualification'];
		$mobile=$_POST['Mobile'];
		$address=$_POST['Address'];
		$sql="INSERT INTO faculty(Faculty_name,Date_of_birth,Email,Date_of_joining,Salary,Designation,Gender,Qualification,Mobile,Address)VALUES('$name','$dob','$email','$doj','$salary','$designation','$gender','$qualification','$mobile','$address')";
		$run=mysqli_query($conn,$sql);
		if($run)
		{
			echo"form submitted successfully";
		}
		else
		{
			echo"form not submitted";
		}
	}
	else
	{
		echo"all fields are required";
	}
	?>
   
   
   </td></tr>
   </table>
   </div>
       <br>
<?php
	require "include/footer.php";
?>
</body>
</html>