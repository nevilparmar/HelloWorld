<!DOCTYPE html>
<html>
<body bgcolor="#74ACEB   ">
<head>
    <title>Show me all the Applicants who are Applying for Jobs</title>
</head>


<h1>People List</h1>
<?php

$db = new mysqli('localhost', 'root','nevil1825', 'CSI_Graduates');


if (mysqli_connect_errno())
{
    echo '<p>Error: Could not connect to database.<br/>
	Please try again later.</p>';
    exit;
}


$qr = "SELECT *
	   		  FROM profiles";
$outcome = $db->query($qr);

echo "<p>Number of records found: ".$outcome->num_rows."</p>";

if($outcome->num_rows >0)
{
    while($row = $outcome->fetch_assoc())
    {
        echo "<strong>User ID: </strong>".$row["id"];
        echo "<br><strong>Name of the Applicant: </strong>".$row["name"];
        echo "<br><strong>Age of the Applicant: </strong>".$row["age"];
        echo "<br><strong>Gender: </strong>".$row["gender"];
        echo "<br><strong>Applicants Education Level: </strong>".$row["education_level"];
        echo "<br><strong>Applicants Degree: </strong>".$row["degree"];
        echo "<br><strong>Other Achieved Certificates: </strong>".$row["certificates"];
        echo "<br><strong>Skills and Specialization: </strong>".$row["Skills_specialization"];
        echo "<br><strong>Veteran Status: </strong>".$row["Veteran"];
        echo "<p>---------------------------------------------------------------------------------------------------</p>";
    }

}

$db->close();

?>
</body>
</html>