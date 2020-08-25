<html>
<head>
<style>
body
{
	padding:100px
}
table.center
{
	margin-left:auto;
	margin-right:auto
}
</style>
</head>
<body>
<div class=a style="text-align: center;">
<form name="nuzha" id="nuzha"  method="post">
        <table class="center">
			<tr>
            <td>Name </td>
			<td><input type="text" name="name" placeholder="Enter Name"/></td>
            </tr>
            <tr>
            <td>Age </td>
            <td><input type="text" id="age" name="age" placeholder="Enter Age"/></td>
            </tr>
			<tr>
            <td>Height</td>
            <td><input type="text" name="height" placeholder="Enter Height"/></td>
            </tr>
			<tr>
            <td>Weight</td>
            <td><input type="text" name="weight" placeholder="Confirm Weight"/></td>
            </tr>
			<tr><td></td><td><input type="submit" name="submit" value="Submit"></td></tr>
</div>
</body>
</form>
</html>
<?php

if (isset ($_REQUEST['submit']))
{
        $Name = $_REQUEST['name'];
        $Age=$_REQUEST['age'];
		$Height=$_REQUEST['height'];
		$Weight=$_REQUEST['weight'];
        if(empty($Name) && empty($Age) && empty($Height) && empty($Weight))
        {
            echo '<script> alert("Please fill the required details") </script>';
        }
		else if(empty($Name) && empty($Age))
		{
			echo '<script> alert("Please Enter name or Age") </script>';
		}
		else if(!empty($Name) && empty($Age))
		{
			if(empty($Height))
			{
				echo '<script> alert("Please enter Height Feild") </script>';
			}
			else
			{
				echo '<script> alert("Proceed") </script>';
			}
		}
		else if(empty($Name) && !empty($Age))
		{
			if(empty($Weight))
			{
				echo '<script> alert("Please enter Weight feild") </script>';
			}
			else
			{
				echo '<script> alert("Proceed") </script>';
			}
			
			
		}
		else if(!empty($Name) && !empty($Age))
		{
			echo '<script> alert("Proceed") </script>';
		}
		else
		{
			echo '<script> alert("Please provide right information") </script>';
		}
		
		
}
		
