<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunflower</title>
</head>
<body>
<form method="post">
<table>
<tr>
<td>Username</td><td><input type="text" name="username" placeholder="Enter username" ></td></tr>
<tr><td>Password</td><td><input type="password" name="password" placeholder="Enter Password"></td></tr>
 <tr>
 <td>I'm not a Robot</td><td><input type="checkbox" name="robot"  value="robot"></td>
 </tr>
<tr><td><input type="submit" name="login" value="Login"></td>
<td><input type="reset" name="reset" value="reset"></td>
</tr>
</table>
</form>
</body>
</html>
<?php
print_r($_REQUEST);

if (isset ($_REQUEST['login']))
{
$username = $_REQUEST['username'];
$password=$_REQUEST['password'];

if (isset ($_REQUEST['robot']))
{
	$robot=$_REQUEST['robot'];
}
			
			if(empty($username)) 
			{
				echo '<script> alert("Please enter username") </script>';
			}
			else
			{
				if(empty($password))
				{
					echo '<script> alert("Please enter password") </script>';
				}
				else
				{
					if(empty($robot))
					{
						echo '<script> alert("Please select I am not a Robot") </script>';
					}
					else
					{
						include('user.php');
						$a=new user($username,$password);
						$b=$a->validate_user();
						if ($b==1)
						{
							echo '<script> alert("Invalid username") </script>';
						}
						if ($b==2)
						{
							echo '<script> alert("Invalid Password") </script>';
						}
						if ($b==3)
						{
							echo '<script> alert("username and password not matching") </script>';
						}
						if ($b==4)
						{
							header("location:index.php");
						}
					}
				}
			}
			
			
			
			/*else
			{
				include('user.php');
				$a=new user($username,$password);
				$b=$a->validate_user();
				if ($b==1)
				{
					echo '<script> alert("Invalid username") </script>';
				}
				if ($b==2)
				{
					echo '<script> alert("Invalid Password") </script>';
				}
				if ($b==3)
				{
					echo '<script> alert("username and password not matching") </script>';
				}
				if ($b==4)
				{
					header("location:index.php");
				}
				
			}*/
			
}

?>
