<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" href = "viewbookstyle.css">
	<title>Book Details</title>
</head>
<body>
	<div class="login-box">
  <h2>Book Details</h2>
  <?php 
  include_once 'database.php'; 
  $id = $_GET['id'];
  $res = mysqli_query($conn,"select * from books where ID = " . $id );
  $row = mysqli_fetch_array($res);
  ?>
  <center><img src="<?php echo $row["picture"] ?>" style = "padding-bottom: 40px" /></center>
  <form name = "viewbook" method = "post" enctype="multipart/form-data">
    <div class="user-box">

      <input type="text" name="name" value = "<?php echo $row["name"] ?>">
      <label>Name</label>
    </div>
    <div class="user-box">
      <textarea id = "description" name="description"><?php echo $row["description"] ?></textarea>
      <label>Description</label>
    </div>
    <div class="user-box">
      <input type="text" name="author" value = "<?php echo $row["author"] ?>">
      <label>Author Name</label>
    </div>
    <center>
    <a href="index.php" >
      All Books
    </a>
	</center>
  </form>
</div>

</body>
</html>