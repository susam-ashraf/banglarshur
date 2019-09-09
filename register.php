<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(isset($_SESSION['username']) || !empty($_SESSION['username'])){
  header("location: admin/user_home.php");
  exit;
}
?>


<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>



<!DOCTYPE html>
<!-- saved from url=(0059)http://kamleshyadav.com/html/miraculous/version1/index.html -->
<html lang="en"><!--<![endif]--><!-- Begin Head -->
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Miraculous - Online Music Store Html Template</title>
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="./index_files/fonts.css">
    <link rel="stylesheet" type="text/css" href="./index_files/bootstrap.css">
    <!--<link rel="stylesheet" type="text/css" href="./index_files/font-awesome.min.css">-->
    <link rel="stylesheet" type="text/css" href="./index_files/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="./index_files/nice-select.css">
    <link rel="stylesheet" type="text/css" href="./index_files/volume.css">
	<link rel="stylesheet" type="text/css" href="./index_files/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="./index_files/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
        <link rel="stylesheet" type="text/css" href="https://cdn.plyr.io/3.3.21/plyr.css">
    <!--<link rel="stylesheet" type="text/css" href="css/player_custom.css">-->
    <link rel="stylesheet" type="text/css" href="css/style_home_player.css">
    
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="http://kamleshyadav.com/html/miraculous/version1/images/favicon.png">
<script src="./index_files/jquery.mousewheel.min.js.download"></script>

<style>
    input:-webkit-autofill, textarea:-webkit-autofill, select:-webkit-autofill {
    background-color: #fff !important;
    background-image: none !important;
    color: rgb(0, 0, 0) !important;
}
</style>

</head>

<body cz-shortcut-listen="true" class="loaded">
	<!----Loader Start---->
	<div class="ms_loader">
		<div class="wrap">
		  <img src="./index_files/loader.gif" alt="">
		</div>
	</div>
    <!----Main Wrapper Start---->
    <div class="ms_main_wrapper">
        <!---Side Menu Start--->
        <div class="ms_sidemenu_wrapper">
            <div class="ms_nav_close">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>
            <div class="ms_sidemenu_inner">
                <div class="ms_logo_inner">
                    <div class="ms_logo">
                        <a href="http://kamleshyadav.com/html/miraculous/version1/index.html"><img src="./index_files/logo.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="ms_logo_open">
                        <a href="http://kamleshyadav.com/html/miraculous/version1/index.html"><img src="./index_files/open_logo.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="ms_nav_wrapper mCustomScrollbar _mCS_1 mCS-autoHide" style="overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                    <ul>
                        <li><a href="http://kamleshyadav.com/html/miraculous/version1/index.html" class="active" title="Discover">
						<span class="nav_icon">
							<span class="icon icon_discover"></span>
						</span>
						<span class="nav_text">
							Home
						</span>
						</a>
                        </li>
                        <li><a href="http://kamleshyadav.com/html/miraculous/version1/album.html" title="Albums">
						<span class="nav_icon">
							<span class="icon icon_albums"></span>
						</span>
						<span class="nav_text">
							albums
						</span>
						</a>
                        </li>
                        <li><a href="http://kamleshyadav.com/html/miraculous/version1/artist.html" title="Artists">
						<span class="nav_icon">
							<span class="icon icon_artists"></span>
						</span>
						<span class="nav_text">
							artists
						</span>
						</a>
                        </li>
                        <li><a href="http://kamleshyadav.com/html/miraculous/version1/genres.html" title="Genres">
						<span class="nav_icon">
							<span class="icon icon_genres"></span>
						</span>
						<span class="nav_text">
							genres
						</span>
						</a>
                        </li>
                        <li><a href="http://kamleshyadav.com/html/miraculous/version1/top_track.html" title="Top Tracks">
						<span class="nav_icon">
							<span class="icon icon_tracks"></span>
						</span>
						<span class="nav_text">
							top tracks
						</span>
						</a>
                        </li>
                        <li><a href="http://kamleshyadav.com/html/miraculous/version1/free_music.html" title="Free Music">
						<span class="nav_icon">
							<span class="icon icon_music"></span>
						</span>
						<span class="nav_text">
							User Uploads
						</span>
						</a>
                        </li>
                        <li><a href="http://kamleshyadav.com/html/miraculous/version1/stations.html" title="Stations">
						<span class="nav_icon">
							<span class="icon icon_station"></span>
						</span>
						<span class="nav_text">
							Trending Tracks
						</span>
						</a>
                        </li>
                         <li><a href="http://kamleshyadav.com/html/miraculous/version1/favourite.html" title="Favourites">
						<span class="nav_icon">
							<span class="icon icon_favourite"></span>
						</span>
						<span class="nav_text">favourites</span>
						</a>
                        </li>
                        
                        <li><a href="http://kamleshyadav.com/html/miraculous/version1/feature_playlist.html" title="Featured Playlist">
						<span class="nav_icon">
							<span class="icon icon_fe_playlist"></span>
						</span>
						<span class="nav_text">
							featured playlist
						</span>
						</a>
                        </li>
                    </ul>
                    <ul class="nav_downloads">
                       
                    </ul>
                    <ul class="nav_playlist">
                    </ul>
                </div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; display: block; height: 176px; max-height: 314px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
            </div>
        </div>
        <!---Main Content Start--->
        <div class="ms_content_wrapper padder_top80">
            <!---Header--->
            <div class="ms_header">
                <div class="ms_top_left">
                    <div class="ms_top_search">
                       <form method="post" action="search.php" class="">
                        <input type="text" name="key" class="form-control" placeholder="Search Music Here..">
                        <span class="search_icon">
                        
                        <button type="submit" name="submit" class="btn btn-default src_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
							
						</span>
                       </form>
                    </div>
                </div>
                <div class="ms_top_right">
              
                    <div class="ms_top_btn">
                        <a href="login.php" class="ms_btn login_btn"><span>login</span></a>
                    </div>
                </div>
            </div>
            
		<!--	==================== REgistration ========================-->
            
            
            <div class="wrapper">
                    <h2>Sign Up</h2>
                    <hr>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <label>Username</label>
                            <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                            <span class="help-block"><?php echo $username_err; ?></span>
                        </div>    
                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                            <span class="help-block"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                            <span class="help-block"><?php echo $confirm_password_err; ?></span>
                        </div>
                        <hr>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-default" value="Reset">
                        </div>
                        <p>Already have an account? <a href="login.php">Login here</a>.</p>
                    </form>
                </div>  
    
     <!--	==================== REgistration ========================--> 
	
    </div>  
	
    
    
  
        <!----Footer Start---->
        <div class="ms_footer_wrapper">
<!--            <div class="ms_footer_logo">
                <a href="http://kamleshyadav.com/html/miraculous/version1/index.html"><img src="./index_files/open_logo.png" alt=""></a>
            </div>-->
            
            <!----Copyright---->
            <div class="col-lg-12">
                <div class="ms_copyright">
                    <div class="footer_border"></div>
                    <p>Copyright © 2018 <a href="#"> BanglarShur </a> . All Rights Reserved.</p>
                </div>
            </div>
        </div>
		
 </div>

		
    <!--Main js file Style-->
    <script type="text/javascript" src="./index_files/jquery.js.download"></script>
    <script type="text/javascript" src="./index_files/bootstrap.min.js.download"></script>
    <script type="text/javascript" src="./index_files/swiper.min.js.download"></script>
    <script type="text/javascript" src="./index_files/jplayer.playlist.min.js.download"></script>
    <script type="text/javascript" src="./index_files/jquery.jplayer.min.js.download"></script>
    <script type="text/javascript" src="./index_files/audio-player.js.download"></script>
    <script type="text/javascript" src="./index_files/volume.js.download"></script>
    <script type="text/javascript" src="./index_files/jquery.nice-select.min.js.download"></script>
	<script type="text/javascript" src="./index_files/jquery.mCustomScrollbar.js.download"></script>
    <script type="text/javascript" src="./index_files/custom.js.download"></script>

</body>
</html>


