<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" href = "newbookstyle.css">
	<title>Add New Book</title>
	<script type="text/javascript">
	function validateForm()
	{
		var name = document.forms["addbook"]["name"].value;
		var picture = document.forms["addbook"]["picture"].value;
		var description = document.forms["addbook"]["description"].value;
		var author = document.forms["addbook"]["author"].value;

		if(name == "")
		{
			alert("Please enter a name");
			return false;
		}
		if(picture == "")
		{
			alert("Please select a picture");
			return false;
		}
		if(description == "")
		{
			alert("Please enter a description");
			return false;
		}
		if(author == "")
		{
			alert("Please enter an author name");
			return false;
		}
		return true;
	}

</script>
</head>
<body>
	<div class="login-box">
  <h2>Add New Book</h2>
  <form name = "addbook" action = "insert.php" onsubmit = "return validateForm()" method = "post" enctype="multipart/form-data">
    <div class="user-box">
      <input type="text" name="name">
      <label>Name</label>
    </div>
    <div class="user-box">
		<input type="file" name="picture"/>
		<label>Picture</label>
    </div>
    <div class="user-box">
      <input type="text" name="description">
      <label>Description</label>
    </div>
    <div class="user-box">
      <input type="text" name="author">
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

</body>
</html>