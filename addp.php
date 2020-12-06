
<?php

$servername='localhost';
$username='root';
$password='';
$dbname='book_db';

$conn= mysqli_connect($servername, $username, $password, $dbname);


$id=$_GET['book_id'];
$book_name=$_GET['book_name'];
$book_specs=$_GET['book_specs'];


if($conn==false)
	{
		echo "connection failed";
	}

 
	$sql= "INSERT INTO `book_det` (`book_id`, `book_name`, `book_specs`) VALUES ('$id', '$book_name', '$book_specs')";
		

	if(!mysqli_query ($conn, $sql))
		{
			echo "not successful";
		}
	else{echo "Added";}

mysqli_close($conn);

?>
