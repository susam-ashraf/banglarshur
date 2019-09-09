<?php

$track_name = $_GET['val'];
/*$user_name = $_GET['val2'];*/
$user_name = "mobarak";



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


$sql2 = "SELECT * FROM admin_playlist WHERE track_name = '$track_name'";
						$result = $conn->query($sql2);
					
						if ($result->num_rows > 0) {
							 // output data of each row
							 while($row2 = $result->fetch_assoc()) {
							 
							
                           $trak_id = $row2['track_id'];
                                 
							 }
						} else {
							 echo "0 results";
						}

$sql3 = "SELECT * FROM users WHERE username = '$user_name'";
						$result3 = $conn->query($sql3);
					
						if ($result3->num_rows > 0) {
							 // output data of each row
							 while($row3 = $result3->fetch_assoc()) {
							 
							
                           $user_id = $row3['id'];
                                 
							 }
						} else {
							 echo "0 results";
						}

$sql4 = "SELECT * FROM like_table WHERE track_id = '$trak_id' AND user_id = '$user_id'";
						$result4 = $conn->query($sql4);
					
						if ($result4->num_rows > 0) {
                            
                            echo "Already Liked ! ";
							 
						} else {
							 
                            
                            // output data of each row
							 while($row4 = $result4->fetch_assoc()) {
							 
							
                           $sql = "INSERT INTO like_table (track_id, user_id)
                            VALUES ('$trak_id', '$user_id')";

                            if ($conn->query($sql) === TRUE) {
                                echo "New record created successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }

							 }
						}
                           
                                 




$conn->close();
?>