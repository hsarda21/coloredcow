<?php

include_once 'database.php';
if(isset($_POST['submit']))
{	 
	$name = $_POST['name'];
	$picture = $_POST['picture'];
	$description = $_POST['description'];
	$author = $_POST['author'];
	$filename = $_FILES["picture"]["name"]; 
	$tempname = $_FILES["picture"]["tmp_name"];     
	$picture = "image/".$filename; 

	$sql = "INSERT INTO books (name,picture,description,author)
	VALUES ('$name','$picture','$description','$author')";
	if (mysqli_query($conn, $sql)) 
	{
		$id =  mysqli_insert_id($conn);
		header("Location: viewbook.php?id=".$id);
		exit();
	} 
	else 
	{
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
	mysqli_close($conn);


}

?>