<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Talto</title>
	<link rel="shortcut icon" href="images/title_icon.ico" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>


<div class="hidden-sm hidden-xs">
    <!-- <header class="bg-image"> -->
        <div class="bw-gradient"></div>
        <div class="header">
            <div class="sub-header">
                    <ul class="left-menu">
                            <li><a href="landing.html">HOME</a></li>
                            <li><a href="landing.html#about">ABOUT US</a></li>&nbsp;&nbsp;
                            <li><a href="contestants.html">CONTESTANTS</a></li>
                        </ul>
                        <div class="logo">
                            <a href="#">Logo</a>
                        </div>
                        <ul class="right-menu">
                            
                            <li><a href="#">GALLERY</a></li>
                            <li><a href="register.php"><span class="glyphicon glyphicon-user" style="color:#fff"></span>&nbsp; SIGN UP</a></li>
							<li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in" style="color:#fff"></span>&nbsp; LOG IN</a></li>
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
        <li><a href="landing.html#about"><span style="color:#39f60a">ABOUT US</span></a></li>
        <li><a href="contestants.html"><span style="color:#39f60a">CONTESTANTS</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-user" style="color:#fff"></span>&nbsp;&nbsp;<span style="color:#39f60a"> SIGN UP</span></a></li>
        <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in" style="color:#fff">&nbsp;</span><span style="color:#39f60a"> LOGIN</span></a></li>
      </ul>
    </div>
  <!-- </div> -->
</nav>
<!-- <header class="bg-image"></header> -->
</div><br><br><br><br>



	<div class="main wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top">
				<!-- <form action="#" method="post"> -->
				<form method="post" action="login.php">
					
					<?php include('errors.php'); ?>
					
					<input class="form-control" type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder="Email" required><br>
					<input class="form-control" type="password" name="password" id="password" value="<?php echo $password; ?>" placeholder="Password" required><br>
					<div class="wthree-text">
					<input type="submit" value="LOGIN" id="login" name="login" class="form-submit">
					
				</form>
				<p>Are u a New User?&nbsp; <a href="register.php"> SignUp Now!</a></p>
			</div>
		</div>
		
		<div class="cc-agile">
			<p> © 2019 | Design by <a href="#" target="_blank"> Fame Technologies</a></p>
		</div>
		
		<ul class="cc-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<script src="js/style.js"></script>    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>