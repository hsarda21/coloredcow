<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" href = "newbookstyle.css">
	<title>Add New Book</title>
</head>
<body>
	<div class="login-box">
  <h2>Add New Book</h2>
  <form name = "addbook" action = "insert.php" onsubmit = "return validateForm()" method = "post" enctype="multipart/form-data">
    <div class="user-box">
      <input type="text" name="name" required>
      <label>Name</label>
    </div>
    <div class="user-box">
      <input type="file" name="picture" required>
      <label>Picture</label>
    </div>
    <div class="user-box">
      <input type="text" name="description" required>
      <label>Description</label>
    </div>
    <div class="user-box">
      <input type="text" name="author" required>
      <label>Author Name</label>
    </div>
    <center>

    <button type = "submit" value = "Submit" name = "submit">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
    	Submit
    </button>
	</center>
  </form>
</div>

<script type="text/javascript">
	function validateForm()
	{
		var name = document.forms["addbook"]["name"].value;
		var picture = document.forms["addbook"]["picture"].value;
		var description = document.forms["addbook"]["description"].value;
		var author = document.forms["addbook"]["forms"].value;

		if(name = "")
		{
			alert("Please enter a name");
			return false;
		}
		if(picture = "")
		{
			alert("Please select a picture");
			return false;
		}
		if(description = "")
		{
			alert("Please enter a description");
			return false;
		}
		if(author = "")
		{
			alert("Please enter an author name");
			return false;
		}
		return true;
	}

</script>
</body>
</html>