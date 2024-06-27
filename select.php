<!doctype html>
<html lang="en">
<?php
	require "include/header.php";
	require "include/dbconnect.php";
?>
<div>
   <table style="width:77%;border:1px #07294d solid;" align="center">
   <tr><td style="background:#07294d;color:white;padding-left:10px;" colspan=2>Login</td></tr>
   <tr><td>
   <?php
	
   if(isset($_POST['username']))
   {
	   
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="SELECT * from user where user_name='$username'and password='$password'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)===1)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				if($row['user_name']===$username&&$row['password']===$password)
				{
					echo"Hey there!";
					echo"You are successfully logged in!";
				}
			}
		}
		else
		{
			echo"Wrong entry please check your id or password";
		}
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