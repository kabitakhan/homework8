<?php
include("config.php");
//patient table 
$tbl_patient="CREATE TABLE IF NOT EXISTS patient(
p_id INT(11) NOT NULL,
PRIMARY KEY(p_id),
name VARCHAR(50) NOT NULL,
email VARCHAR(50)NOT NULL)";
$patient=mysqli_query($myconn,$tbl_patient);
if($patient===TRUE)
{
	echo"<br>patient table reated happy codding (:";
}
else
{
		echo"<br>patient table not reate ):";

}
// image Table

$tbl_cv="CREATE TABLE IF NOT EXISTS cv(
picname VARCHAR(50) NOT NULL,
img_name VARCHAR(50) NOT NULL,
img_path VARCHAR(50) NOT NULL,
img_type VARCHAR(50) NOT NULL
)";
$cv=mysqli_query($myconn,$tbl_cv);
if($cv===TRUE)
{
	echo"<br>CV table reated happy codding (:";
}
else
{
		echo"<br>CV table not reate ):";

}

// Signup
$tbl_user="CREATE TABLE IF NOT EXISTS user(
uname VARCHAR(50) NOT NULL,
password VARCHAR(50)NOT NULL)";
$user=mysqli_query($myconn,$tbl_user);
if($user===TRUE)
{
	echo"<br>User table reated happy codding (:";
}
else
{
		echo"<br>User table not reate ):";

}
//image table
?>