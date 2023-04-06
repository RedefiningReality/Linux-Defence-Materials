<!DOCTYPE html>
<html>
<head>
	<title>File Upload and Rename</title>
</head>
<body>
	<h2>Upload</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<label>Select JPG File:</label>
		<input type="file" name="fileToUpload" id="fileToUpload">
		<br><br>
		<input type="submit" value="Upload Image" name="submit">
	</form>
	<br><br>
	<h2>Rename</h2>
	<form action="" method="post">
		<label>Enter new file name:</label>
		<input type="text" name="newFileName">
		<br><br>
		<input type="submit" value="Rename File" name="submit">
	</form>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
	//Upload File
	if(!empty($_FILES['fileToUpload']['name'])) {
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }

		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg") {
		    echo "Sorry, only JPG files are allowed.";
		    $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
	}

	//Rename File
	if(!empty($_POST['newFileName'])) {
		$oldFileName = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$newFileName = $target_dir . $_POST['newFileName'] . ".jpg";

		if (rename($oldFileName, $newFileName)) {
		    echo "File renamed successfully.";
		} else {
		    echo "Sorry, there was an error renaming your file.";
		}
	}
}
?>
