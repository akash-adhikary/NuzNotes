<?php 
class User
{
private $username;
private $password;


function  __construct($username,$password)
{

$this->username=$username;
$this->password=$password;
}
function validate_user()
{

	$pattern="/^[A-Za-z]+[A-Za-z0-9]+[A-Za-z]+$/i";
	$a=preg_match($pattern,$this->username);
	if($a==1)
		{
			$count=strlen($this->password);
				if($count<=10)
				{
					$pattern="/^[A-Za-z]+$/i";
					$b=preg_match($pattern,$this->password);
						if($this->username="A1d2f34c" && $this->password=="asdASDerQw")
						{
							return 4;
						}
						else
						{
							return 3;
						}
				}
				else
				{
					return 2;
				}
		}
	else
	{
		return 1;
	}
	
}
}

?>
