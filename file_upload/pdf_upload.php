<!DOCTYPE html>
<html>
<body>

<form action="?" method="post" enctype="multipart/form-data">
    Select aadhar to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit">
</form>

</body>
</html>


<?php

if(isset($_POST['submit']))
{
	$target_dir = "uploads/";
	$target_file = $target_dir . $_FILES["fileToUpload"]["name"];
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	//Check if file already exists
	if (file_exists($target_file)) 
	{
		echo "././././.././././././././././";
		echo "Sorry, file already exists!!!!!!!!!!!!!!!!!!!!!!!!!!......................";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) 
	{
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	 //Allow certain file formats
	if($imageFileType != "pdf" ) 
	{
		echo "Sorry, only PDF files are allowed.";
		$uploadOk = 0;
	} 
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) 
	{
		echo "<br>Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} 
	else 
	{
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
		{
			echo "Uploaded sucessfully...";
		} 
		else 
		{
			echo "Sorry, there was an error uploading your file.!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
		}
	}
	
}

?>
