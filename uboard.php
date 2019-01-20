<?php include('board.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Talto</title>
	<link rel="shortcut icon" href="images/title_icon.ico" /> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/uboard.css">
<style>
  a {color:white;}
  button {
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
  }
</style>
</head>
<body style="background-color: bisque;">

<div class="hidden-sm hidden-xs">
    <!-- <header class="bg-image"> -->
        <div class="bw-gradient"></div>
        <div class="header">
            <div class="sub-header">
                    <ul class="left-menu">
                            <li><a href="landing.html">HOME</a></li>
                            <li><a href="#">GALLERY</a></li>&nbsp;&nbsp;
                            <li><a href="contestants.html">CONTESTANTS</a></li>
                        </ul>
                        <div class="logo">
                            <a href="#">Logo</a>
                        </div>
                        <ul class="right-menu">
						
                            <li class="active"><a href="#uboard">DASHBOARD</a></li>
							<!--
                            <li><a href="register.php"><span class="glyphicon glyphicon-user" style="color:#fff"></span>&nbsp; SIGN UP</a></li>
							<li><a href="login.php"><span class="glyphicon glyphicon-log-in" style="color:#fff"></span>&nbsp; LOG IN</a></li>
							-->
        							<li>
                        <form method="post" action="uboard.php">
                          <!-- <a href="landing.html"><span class="glyphicon glyphicon-log-out" style="color:#fff"></span>&nbsp; LOG OUT</a> -->
                          <span class="glyphicon glyphicon-log-out" style="color:#fff">
                            <input type="submit" value="LOGOUT" id="logout" name="logout" class="form-submit" style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;">
                          </span>
                        </form>
                      </li>
                      </ul>
            </div>
        </div>
    <!-- </header> -->
</div>

<div class="hidden-md hidden-lg hidden-xl">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <!-- <div class="container-fluid"> -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">LOGO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="landing.html"><span style="color:#39f60a">HOME</span></a></li>
        <li><a href="#"><span style="color:#39f60a">GALLERY</span></a></li>
        <li><a href="contestants.html"><span style="color:#39f60a">CONTESTANTS</span></a></li>
		<li class="active"><a href="#">DASHBOARD</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-user" style="color:#fff"></span>&nbsp;&nbsp;<span style="color:#39f60a"> SIGN UP</span></a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in" style="color:#fff">&nbsp;</span><span style="color:#39f60a"> LOGIN</span></a></li>
      </ul>
    </div>
  <!-- </div> -->
</nav>
<header class="bg-image"></header>
</div>
<br id="uboard"><br>
<hr>
<div class="container bootstrap snippet"><br>
    <div class="row">
  		<div class="col-sm-10"><h1 style="color: white;">TiTle</h1></div>
    	<div class="col-sm-2"><a href="#" class="pull-right"><img title="Event Logo" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100" > <h5><center>Event Logo</center></h5></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <!--
		<h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload" disabled> -->
      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="#" style="color: black;">/* Youtube Link of the Video user Uploaded */</a></div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares </strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Votes </strong></span> 135</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts </strong></span> 2</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers </strong></span> 78</li>
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media </div>
            <div class="panel-body">
            	<center><i class="fa fa-facebook fa-2x"></i>&nbsp;&nbsp; <i class="fa fa-github fa-2x"></i>&nbsp;&nbsp; <i class="fa fa-twitter fa-2x"></i>&nbsp;&nbsp; <i class="fa fa-pinterest fa-2x"></i>&nbsp;&nbsp; <i class="fa fa-google-plus fa-2x"></i>&nbsp;&nbsp;</center>
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs" style="border-bottom-color:#fff">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <li><a data-toggle="tab" href="#videos">Uploaded Videos</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <br>
                  <form class="form" action="#" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name" title="enter your first name if any." disabled>
                          </div>
                      </div>
					  
					<div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="name@email.com" title="enter your email." disabled>
                          </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="9876543210" title="Enter your mobile number" disabled>
                          </div>
                      </div>
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Password" title="Enter your password" disabled>
                          </div>
                      </div>
					  
					  <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="email"><h4>Address</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="Address" title="Enter a location" disabled>
                          </div>
                      </div>

                      <div class="form-group">
        
							<div class="col-xs-12">
                                <br>
								<button class="btn btn-lg btn-success" onclick="myFunction()" type="submit"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
                              	<!--
								<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
								-->
                            </div>
                      </div>
					  <div class="form-group">
				  
								<div class="col-xs-12"><br><hr><br>
									<label for="link"><h4>Upload Embedded Link</h4></label>
								    <input type="link" class="form-control" id="link" placeholder="Upload Embedded Link" title="Enter the Video Link"><br>
									<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-export"></i> Upload</button>
								</div>
	                  </div>					  
              	</form>
              

             </div><!--/tab-pane-->
             <div class="tab-pane" id="videos">
                 
	<div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
						<div class="head">
                            <img class="img img-responsive img-circle fix" src="images/pimage.jpg" align="center" alt="Image 1" width="68px">
									Ram<br>1234
						</div>
                        <div class="banner-img">
                            <!-- <img src="http://via.placeholder.com/640x360" alt="Image 1"> -->
							<iframe class="vid  img-responsive"
								src="https://www.youtube.com/embed/1LnzKwO41Og">
							</iframe>
                        </div>

                        <div class="dates">
						<p style="color: white;">Life is like playing a violin in public and learning the instrument as one goes on.</p>
                        </div>
                        <div class="footer">
                            <a href="#" class="Cbtn Cbtn-info">Vote</a>
                            <a href="#" class="Cbtn Cbtn-primary">Follow</a>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
						<div class="head">
                            <img class="img img-responsive img-circle fix" src="images/pimage.jpg" align="center" alt="Image 1" width="68px">
									Ram<br>1234
						</div>
                        <div class="banner-img">
                            <!-- <img src="http://via.placeholder.com/640x360" alt="Image 1"> -->
							<iframe class="vid img-responsive"
								src="https://www.youtube.com/embed/tgbNymZ7vqY">
							</iframe>
                        </div>

                        <div class="dates">
						<p style="color: white;">Life is like playing a violin in public and learning the instrument as one goes on.</p>
                        </div>
                        <div class="footer">
                            <a href="#" class="Cbtn Cbtn-info">Vote</a>
                            <a href="#" class="Cbtn Cbtn-primary">Follow</a>
                        </div>
                    </div>
                </div> 
            </div>
		</div>
	</div>

			   
             </div><!--/tab-pane-->
			 
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
     
	 

<script>
function myFunction() {
  window.open("update.html", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=170,left=30,width=1400,height=500");
}
</script>

	<script src="js/style.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/uboard.js"></script>
</body>
</html>	