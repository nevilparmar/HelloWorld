<?php
	if (isset($_POST['upload'])){

		$file_name = $_FILES['file']['name'];
		$file_type = $_FILES['file']['type'];
		$file_size = $_FILES['file']['size'];
		$file_tem_Loc = $_FILES['file']['tem_name'];
		$file_store = "uploads".$file_name;

		if(move_uploaded_file($file_tem_Loc,$file_store)){
			echo "Your resume is uploaded";
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>uploading file</title>
</head>

<body>
	<form action = "?" method = "POST" enctype="multipart/form-data">
	<label>Uploading Files</label>
	<p><input type = "file" name = "file"/></p>
	<p><input type = "submit" name = "upload" value = "upload image"></p>
	</form>
</body>
</html>
