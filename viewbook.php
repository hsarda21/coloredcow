<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" href = "viewbookstyle.css">
	<title>Book Details</title>
</head>
<body>
	<div class="login-box">
  <h2>Book Details</h2>
  <center><img src="https://static.toiimg.com/photo/72975551.cms" style = "padding-bottom: 40px" /></center>
  <form action = "insert.php" method = "post" enctype="multipart/form-data">
    <div class="user-box">
      <input type="text" name="name" value = "Sample Book">
      <label>Name</label>
    </div>
    <div class="user-box">
      <textarea id = "description" name="description"></textarea>
      <label>Description</label>
    </div>
    <div class="user-box">
      <input type="text" name="author" value = "Sample Author">
      <label>Author Name</label>
    </div>
    <center>
    <a href="#" onclick="this.closest('form').submit()">
      <!--<span></span>
      <span></span>
      <span></span>
      <span></span>-->
      All Books
    </a>
	</center>
  </form>
</div>

<script type="text/javascript">
  document.getElementById("description").value = "This is a sample description that should fit more than one line.";
</script>
</body>
</html>