<!DOCTYPE html>
<html lang="en">
    <head>
	<link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Blood Bank</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body style="padding-top: 50px;">
        <!-- Header -->

<!------------------------------------------------navbar starts---------------------------------------------->


		<div class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom:180px;">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!--<a class="navbar-brand" href="index.php"><img src="img/favicon.png" style="height:50px;" class="img-responsive"></a>-->
						<a class="navbar-brand" href="index.php">Blood Management System</a>

					</div>


				</div>
	     </div>











<!------------------------------------------------navbar ends---------------------------------------------->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">

					<div class="row">
					 <div class="col-md-3 col-sm-6 home-feature">

                    <div class="thumbnail">
                        <img src="" alt="">
                        <div class="caption">
                            <h3>Request For Blood</h3>


                                <p><a href="requestblood.php" role="button" class="btn btn-danger btn-block">Click Here</a></p>



                            </a>
                        </div>
                    </div>

                </div>


					</div>
					<div class="row">
					 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="" alt="">
                        <div class="caption">
                            <h3>Look for blood bank</h3>


                                <p><a href="checkbank.php" role="button" class="btn btn-danger btn-block">Click Here</a></p>



                            </a>
                        </div>
                    </div>
                </div>


				<div class="col-lg-4 col-lg-offset-4">
											   <h1>Are you a blood bank? sign in!</h1>
                        <form  action="bankloginser.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="email"  required>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="pwd" required>
                            </div>
                            <a href="recoverpassword.php">Forgot Password?</a>
                            <br>

                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
						</div>


					</div>
						<div class="row">
					 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="" alt="">
                        <div class="caption">
                            <h3>Register as donor</h3>


                                <p><a href="logindonar.php" role="button" class="btn btn-danger btn-block">Click Here</a></p>



                            </a>
                        </div>
                    </div>
                </div>


					</div>

						<div class="row">
					 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="" alt="">
                        <div class="caption">
                            <h3>register as blood bank</h3>


                                <p><a href="banksignup.php" role="button" class="btn btn-danger btn-block">Click Here</a></p>



                            </a>
                        </div>
                    </div>
                </div>


					</div>





                </div>
            </div>

        </div>



    </body>
</html>
