<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
	<?php
	$firstname =$lastname = $mobile = $gender = $phone = $age = "";
	$firstnameErr = $lastnameErr = $mobileErr = $genderErr = $phoneErr = $ageErr  = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (empty($_POST["firstname"])) 
		{
		$firstnameErr = "firstname is required";
		}		
		else 
		{
		$firstname = test_input($_POST["firstname"]);
		}
		if (empty($_POST["lastname"])) 
		{
		$lastnameErr = "lastname is required";
		}
		else 
		{
		$lastname = test_input($_POST["lastname"]);
		}
		if (empty($_POST["mobile"])) 
		{
		$mobileErr = "mobile is required";
		}
		else 
		{
		$mobile = test_input($_POST["mobile"]);
		}
		if (empty($_POST["gender"])) 
		{
		$genderErr = "gender is required";
		}
		else 
		{
		$gender = test_input($_POST["gender"]);
		}
		if (empty($_POST["phone"])) 
		{
		$phoneErr = "phone is required";
		}
		else 
		{
		$phone = test_input($_POST["phone"]);
		}
		if (empty($_POST["age"])) 
		{
		$ageErr = "age is required";
		}
		else 
		{
		$age = test_input($_POST["age"]);
		}
	}
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	?>
<html>
<head>
</head>
<body>

	<h1> regesteration form</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
	<b>First Name</b>
	<br>
	<input type = "text" name="firstname"  id="firstname" value="<?php echo $firstname;?>">
	<br>
	<b> Last Name </b>
	<br>
	<input type="text"  name="lastname" id="lastname" value="<?php echo $lastname;?>">
	<br>
	<b>Mobile</b><br>
	<input type="text"  name="mobile" id="mobile" value="<?php echo $mobile;?>">
	<br>
	<b>Gender</b><br>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
	<br>
	<b>Phone</b><br>
	<input type="text"  name="phone" id="phone" value="<?php echo $phone;?>">
	<br>
	<b>Age</b><br>
	<input type="text"  name="age" id="age" value="<?php echo $age;?>"><br><br>
	<input type="submit" name ="submit" ><br>
	</form>
	<?php
	echo "<h2>Your Input:</h2>";
	echo $firstname;
	echo "<br>";
	echo $lastname;
	echo "<br>";
	echo $mobile;
	echo "<br>";
	echo $gender;
	echo "<br>";
	echo $phone;
	echo "<br>";
	echo $age;
	?>
</body>
</html>