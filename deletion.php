<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index]))
		$b_id[$i]=$_POST[$index];
		else
			$i--;
	}
	$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');

for($k=1;$k<=$size;$k++)
{
$q="delete from book where bookid=".$b_id[$k];
mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Deletion</title>
</head>
<body bgcolor="pink">
<h1 style="text-align:center;">Deletion</h1>
<p><?php 
	  
	  echo $size." Records Deleted"; 
     ?>
</p>
Go Back To Home Page :<a href="home.php">Click Here</a>
</body>
</html>
