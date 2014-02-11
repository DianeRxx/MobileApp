<?php
$host = "dianeramsay";
$user = "davidfra_Dave";
$db_name= "ylb10122";
$pass= "PASSWORD";

$con = mysql_connect($host, $user, $pass);

if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 

mysql_select_db("studentDetails", $con); //Replace with your MySQL DB Name
$name=mysql_real_escape_string($_POST['name']); //This value has to be the same as in the HTML form file
$email=mysql_real_escape_string($_POST['email']); //This value has to be the same as in the HTML form file
$phonenumber=mysql_real_escape_string($_POST['phonenumber']); //This value has to be the same as in the HTML form file
$university=mysql_real_escape_string($_POST['university']); //This value has to be the same as in the HTML form file
$degree=mysql_real_escape_string($_POST['degree']); //This value has to be the same as in the HTML form file
$course=mysql_real_escape_string($_POST['course']); //This value has to be the same as in the HTML form file
$year=mysql_real_escape_string($_POST['year']); //This value has to be the same as in the HTML form file
$scheme=mysql_real_escape_string($_POST['scheme']); //This value has to be the same as in the HTML form file
$sql="INSERT INTO StudentDetails (name,email,phonenumber,university,degree,course,year,scheme) VALUES ('$name','$email','$phonenumber','$university','$degree','$course','$year','$scheme')"; 
if (!mysql_query($sql,$con)) {
die('Error: ' . mysql_error()); 
} 
echo "The form data was successfully added to your database."; 


 $body = "Hi,\n\nThank you for entering your details into our app.";
 if (mail($email, $scheme, $body)) {
   echo("<p>Email successfully sent!</p>");
  } else {
   echo("<p>Email delivery failed…</p>");
  }


mysql_close($con);
?>