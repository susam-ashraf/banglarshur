<?php

$track_id = $_GET['cunt'];



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


$sql2 = "SELECT * FROM like_table WHERE track_id = '$track_id'";
						$result = $conn->query($sql2);
					
						if ($result->num_rows > 0) {
							
                            $rcount = $result->num_rows;
                            echo $rcount;
                            
						} else {
							 echo "0";
						}


                           
                                 




$conn->close();
?>
