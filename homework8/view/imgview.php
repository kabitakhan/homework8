<?php
include("../database/config.php");
$sql="SELECT * FROM cv";
$result=mysqli_query($myconn,$sql);
while($row=mysqli_fetch_array($result))
{
	$name=$row['picname'];
		$imgname=$row['img_name'];
		$imgpath=$row['img_path'];

	echo'<img src="'.$imgpath.'"<br>';
}

?>