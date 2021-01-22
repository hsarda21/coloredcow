<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" href = "style.css" type = "text/css">
	<title>List of Books</title>
</head>
<body>
	<div>
    <p align = right>
    <a class = "newbook" href = "newbook.php" onclick>
      Add New Book
    </a>
  </p>
    <ul>
    <?php
    include_once 'database.php'; 
    $res = mysqli_query($conn,"select * from books");
    while($row=mysqli_fetch_array($res)) { ?>
    <a href = "viewbook.php?id=<?php echo $row["Id"]?>" style = "text-decoration: none">
    <li>
    <img src = "<?php echo $row["picture"] ?>" />
    <h3> <?php echo $row["name"] ?></h3>
    <p> <?php echo $row["author"] ?></p>
    </li>
    </a>
    <?php
    }
    ?>
    </ul>
</div>
</body>
</html>