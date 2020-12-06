


<?php

$servername='localhost';
$username='root';
$password='';
$dbname='book_db';

$conn= mysqli_connect($servername, $username, $password, $dbname);

if($conn==false)
	{
		echo "connection failed";
	}

$del_id=$_GET['del_id'];


$sql2="DELETE FROM `book_det` WHERE book_id=$del_id";


if(!mysqli_query ($conn, $sql2))
		{
			echo "not successful";
		}
else {echo "success";}


?>