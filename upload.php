<?php


$file = $_FILES["file"];

if(move_uploaded_file($file["tmp_name"],"uploads/" . $file["name"] ))
{

	echo "Congratulation, Your Resume and Information has been Successfully uploaded";
}
header("refresh:5; url=student_show.html")

?>