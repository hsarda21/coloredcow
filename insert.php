<?php

include_once 'database.php';
//if(isset($_POST['save']))
//{	 
	 $name = $_POST['name'];
	 $picture = $_POST['picture'];
	 $description = $_POST['description'];
 	 $author = $_POST['author'];

	 $sql = "INSERT INTO books (name,picture,description,author)
	 VALUES ('$name','$picture','$description','$author')";
	 if (mysqli_query($conn, $sql)) 
	 {
		echo "New record created successfully !";
	 } 
	 else 
	 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
//}

?>