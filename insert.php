<!DOCTYPE html>
<html>

<?php
$servername = "localhost";
$username = "root";
$password = "nevil1825";
$dbname = "CSI_Graduates";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
$Name=$_POST['name'];
$Age=$_POST['age'];
$Gender=$_POST['gender'];
$Level_of_Education_which_you_have_successfully_completed_and_are_currently_involved_in=$_POST['education_level'];
$Degree_Achieved_or_your_most_recent_successful_completed_Institution_or_Program_from_Trade_School_Online_Course_Private_Program=$_POST['degree'];
$Include_the_List_of_all_Additional_Certificates_you_have_achieved_which_will_better_your_opportunity_in_landing_a_Job=$_POST['certificates'];
$Skills_and_Specialization_in_which_you_are_proficient_in_showing_off_to_your_future_Organization=$_POST['Skills_specialization'];
$Veteran_Status=$_POST['Veteran'];

$sql="INSERT INTO profiles(name,age,gender,education_level,degree,certificates,Skills_specialization,Veteran)
	  VALUES('$Name','$Age','$Gender','$Level_of_Education_which_you_have_successfully_completed_and_are_currently_involved_in','$Degree_Achieved_or_your_most_recent_successful_completed_Institution_or_Program_from_Trade_School_Online_Course_Private_Program','$Include_the_List_of_all_Additional_Certificates_you_have_achieved_which_will_better_your_opportunity_in_landing_a_Job','$Skills_and_Specialization_in_which_you_are_proficient_in_showing_off_to_your_future_Organization','$Veteran_Status')";

if(!mysqli_query($conn,$sql))
{
    echo'Not Inserted';
}
else
{
    echo'The Information for the Applicant was Successfully added to the Account';
}


?>

</body>
</html>