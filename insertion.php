
<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="INSERT INTO book (title,price,author) values('$title',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Insertion</title>
</head>
<body bgcolor="pink">
<h1 style="text-align:center;">Book Record Insertion</h1>
<p><?php if ($status==1) 
	     echo "Record Inserted"; 
     else 
		 echo "Insertion Failed"; 
    ?>
</p  >
Do you want to insert more record? <a href="insertForm.php">Click Here</a>
<br /> Go Back To Home Page :<a href="home.php">Click Here</a>
</body>
</html>
