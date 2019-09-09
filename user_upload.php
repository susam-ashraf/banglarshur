<?php
$target_dir = "user_uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file_name = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_FILENAME);
$target_dir_album_art = "user_album_art/";
$target_file_album_art = $target_dir_album_art . basename($_FILES["album_fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$nam=$_POST["name"];
$album = $_POST['album'];
$artist = $_POST['artist'];


// Check if image file is a actual image or fake image
/*
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
*/
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
/*if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}*/
// Allow certain file formats
/*
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["album_fileToUpload"]["tmp_name"], $target_file_album_art)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		
		// database part....
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "audio_player";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			 die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "INSERT INTO user_playlist (u_file_name,u_track_name,u_album_art,u_album,u_artist)
		VALUES ('$target_file_name','$nam','$target_file_album_art','$album','$artist')";

		if ($conn->query($sql) === TRUE) {
			echo "<br><br> New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		} 
        
   
    	//end .....
		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();
?>