<!DOCTYPE HTML>  
<html>
<head>
	<title>Registration</title>
</head>
<body>
	
<form method="POST" action="" enctype = "multipart/form-data">

Choose file: <input type="file" name="number">
<input type="submit" name="click" value="click">
</form>
<?php
if(isset($_FILES["number"])){
		$name= $_FILES['number']['name'];
		print_r ($_FILES['number']);
		$result = move_uploaded_file($_FILES['number']['tmp_name'],"upload/".$name);
if ($result==1){
	$message="file uploaded succesfully";
	echo $message;
	}
	else{
		$message2 ="could not upload";
		echo $message2;
	}
}

	?>
</body>
</html>