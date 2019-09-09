<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Audio Player</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/multiple-select.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        h4{
            color:#fff;
        }
        label{
            color:#fff;
        }
    </style>
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
                            <li><a href="signUp_form.php">REGISTRATION</a></li>
                            <li><a href="login_form.php">LOGIN</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </header>
    <section id="prob_submit">
        <div class="container text-center">
            <form action="user_upload.php" method="post" enctype="multipart/form-data">
                <h4>
                    Select Audio to upload:
                </h4>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <br><br>
                <h4>
                    Select Album Art Image (165px X 165px):
                </h4>
                <input type="file" name="album_fileToUpload" id="album_fileToUpload">
                <br><br>
                
                <div class="form-group">
                    <label for="exampleInputName2">Track Name :</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="Examp : Ek ta chilo sobar konna">
                </div>
                <div class="form-group">
                    <label for="exampleInputName2">Artist :</label>
                    <input type="text" name="artist" class="form-control" id="exampleInputName2" placeholder="">
                </div>
                <br><br>
                <div class="form-group">
                    <label for="exampleInputName2">Album :</label>
                    <input type="text" name="album" class="form-control" id="exampleInputName2" placeholder="">
                </div>
                <br><br>
                   
                    
                <!--	Name: <input type="text" name="name"><br><br>  -->
                <!--	Problem Title: <input type="text" name="title"><br><br> -->
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </section>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="js/multiple-select.js"></script>
    <script>
        $(function() {
            $('#ms').change(function() {
                console.log($(this).val());
            }).multipleSelect({
                width: '100%',
                selectAll: false
            });
        });
    </script>
    <script src="js/custom.js"></script>
    
</body>

</html>