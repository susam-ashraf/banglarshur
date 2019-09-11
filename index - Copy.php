<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>বাংলার সুর</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header>
        <div id="navbar_top" class="">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">বাংলার সুর</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">HOME <span class="sr-only">(current)</span></a></li>
                            <li><a href="user_playlist.php">USER UPLOADS</a></li>
                        </ul>
<!--                        <form class="navbar-form navbar-left">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search"> </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>-->
                        
                        <form method="post" action="search.php" class="navbar-form navbar-left">
                            <div class="form-group main_src">
                              <input type="text" name="key" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" name="submit" class="btn btn-default src_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                          </form>
                        
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="register.php">REGISTRATION</a></li>
                            <li><a href="login.php">LOGIN</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </header>
    <section id="romantic">
        <div class="container">
            <div class="category_top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">
                            <h4 class="text-uppercase">romantic songs</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-uppercase pull-right"><a href="romantic.php">view all ></a></p>
                    </div>
                </div>
            </div>
            <div id="owl-example" class="owl-carousel">
               
               <?php
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
					
						/*$sql = "SELECT * FROM admin_playlist WHERE ctgry_romantic IS NOT NULL";*/
						$sql = "select * FROM admin_playlist ap JOIN song_category_merge scm on (ap.track_id = scm.track_id) JOIN category c on(scm.ctgry_id = c.ctgry_id) ORDER BY ap.track_id DESC LIMIT 9";
						$result = $conn->query($sql);
					
						if ($result->num_rows > 0) {
							 // output data of each row
							 while($row = $result->fetch_assoc()) {
							 
								?>
               
                            <div><a href="romantic.php"><img src="<?php echo $row["album_art"]; ?>" alt=""></a></div>
                               

								
                
                
					<?php			 
								 
							 }
						} else {
							 echo "0 results";
						}
					
					?>
            </div>
        </div>
    </section>
    
    
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>