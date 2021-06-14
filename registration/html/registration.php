<!DOCTYPE HTML>  
<html>
<head>
	<title>Registration</title>
	<style>
		.error {
			color:red;
		}
	</style>
</head>
<body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["SCRIPT_NAME"]);?>">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<br><span class="error">* <?php echo $nameErr;?></span>
  <br><br>
E-mail: <input type="text" name="email"value="<?php echo $email;?>"><br><br><span class="error">* <?php echo $emailErr;?></span>
  <br><br>

<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
  <br><br>
<br>
Number: <input type="text" name="number" value="<?php echo $number;?>" ><br><span class="error">* <?php echo $numberErr;?></span>
  <br><br>

Address: <input type="text" name="address" value="<?php echo $address;?>" ><br><span class="error">* <?php echo $addressErr;?></span>
  <br><br>
<input type="submit" name="click" value="click">

</form>
</body>
</html>