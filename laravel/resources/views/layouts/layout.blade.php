<!DOCTYPE html>
<html>
	<head>
		<title>Master</title>
		<link rel="stylesheet" href="css/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
		<link rel="stylesheet" type="text/css" href="css/kamran.css">
	</head>
	<body>
		<nav class="navbar  navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="image/logo.png"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1" style="margin:0 auto">
					<ul class="nav navbar-nav home ">
						<li><a href="#">home</a></li>
						<li><a href="#">job</a></li>
						<li><a href="#">employer</a></li>
						<li><a href="#">employee</a></li>
						<li><a href="#">page</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right login">
						<!-- <li><a href="#">Login</a></li>
						<li><a href="#">Register</a></li> -->
						<button type="button" class="btn btn-default">Login</button>
						<button type="button" class="btn btn-default">Register</button>
					</ul>
					</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
				@yield('content')
				<footer>
					<div class="container">
						<div class="row">
							<div class="col-md-12 footertop">
								<div class="col-md-9 siyahi">
									<div class="col-md-4 aq1">
										<h3>about HaNgan</h3>
										<p>Sudden looked elinor off gay estate nor silent. Son read such next see the rest two. Was use extent old entire sussex...</p>
										<button type="button" class="btn btn-secondary">Reade more</button>
									</div>
									<div class="col-md-5 aq2">
										<h3>quick links</h3>
										<div class="ulleft">
											<ul>
												<li><a href="#">Local Jobs</a></li>
												<li><a href="#">Browse Jobs</a></li>
												<li><a href="#">Success Stories</a></li>
												<li><a href="#">Post a Job</a></li>
												<li><a href="#">Publisher</a></li>
											</ul>
										</div>
										<div class="ulright">
											<ul>
												<li><a href="#">Company Directory</a></li>
												<li><a href="#">Salary Estimator</a></li>
												<li><a href="#">Help</a></li>
												<li><a href="#">Employer Login</a></li>
												<li><a href="#">Include My Jobs</a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										
									</div>
								</div>
								<div class="col-md-3">
									<div class="col-md-12 aq3">
										<h3>newsletter</h3>
										<p>Subsribe to get our latest updates and oeffers</p>
										<form >
											<div class="form-group inbut">
												<input class="form-control emailin" placeholder="eneter your email" />
												<button class="btn btn-primary">subsribe</button>
											</div>
										</form>
										<p>*** Don't worry, we wont spam you!</p>
									</div>
									
								</div>
							</div>
							
							
						</div>
					</div>
					<div class="">
						<div class="col-md-12 footerbottom" >
							<div class="container">
								
								
								<div class="col-md-4">
									<p style="color: #929280;">© Copyright 2016 HaNgan</p>
								</div>
								<div class="col-md-4 cook">
									<ul>
										<li><a href="#">Cookies</a></li>
										<li class="coo"><a href="#">Policies</a></li>
										<li class="coo"><a href="#">Terms</a></li>
										<li class="coo"><a href="#">Blogs</a></li>
									</ul>
								</div>
								<div class="col-md-4 iconsa">
									<ul>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</footer>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
				<script src="https://use.fontawesome.com/aeb8f274a4.js"></script>
				<script src="js/jquery.js" type="text/javascript" charset="utf-8" async defer></script>
				<script src="https://cdn.ckeditor.com/4.5.10/basic/ckeditor.js"></script>
				<script src="js/main.js"></script>
				
			</body>
		</html>