<?php
error_reporting(0);

$msg = "";

// This is the sql command for making the table in the phpmyadmin
// CREATE TABLE IF NOT EXISTS `image` (
// 	`id` int(11) NOT NULL AUTO_INCREMENT,
// 	`filename` varchar(100) NOT NULL,
// 	PRIMARY KEY (`id`)
//   ) ENGINE=MyISAM DEFAULT CHARSET=latin1;


// Now we make a folder name "image", where we can store the copy of the image in our api.


// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;

	$db = mysqli_connect("localhost", "root", "", "test1");

	// Get all the submitted data from the form
	$sql = "INSERT INTO image (name, filename) VALUES ('$filename', '$filename')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	echo $folder."<br><br>";
	echo $tempname."<br><br>";
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="content">
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<input class="form-control" type="file" name="uploadfile" value="" />
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
			</div>
		</form>
	</div>
	<div id="display-image">
		<?php
		$query = " select * from image ";
		$result = mysqli_query($db, $query);

		while ($data = mysqli_fetch_assoc($result)) {
		?>
			<img src="./image/<?php echo $data['filename']; ?>">
			<?php 
			echo "<br>".$data['filename']; 
			echo "<br><br>";
			?>
			<br><br>
			

		<?php
		}
		?>
	</div>
</body>

</html>
