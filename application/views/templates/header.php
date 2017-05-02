<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Victor Alexandru">
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/fav-logo.png">
		<title><?=$title?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sweetalert.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.vertical-tabs.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
		<script type="text/javascript">
			document.write('<style type="text/css" media="screen">#greet_1, #greet_2, #greet_3, #work-arrow { display: none; }</style>');
		</script>	
	</head>
	<body>
	
			<div class="container">
				<nav class="navbar navbar-default navbar-fixed-top pageNav" id="pageNav">
					<div class="container nav-container">
						<div class="container-fluid"> 
							<div class="navbar-header"> 
								<button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse" aria-expanded="false"> 
									<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
								</button> <a href="#home" class="navbar-brand"><img src="<?php echo base_url(); ?>assets/images/logo-text.png" alt="html"></a> 
							</div> 
							<div class="collapse navbar-collapse" id="main-navbar-collapse"> 
								<ul class="nav navbar-nav"> 
									<!--<li class="home"><a href="#home">Home</a></li>-->
									<li><a href="#about">About</a></li> 
									<li><a href="#work">Work</a></li> 
									<li><a href="#contact">Contact</a></li> 
								</ul> 
							</div> 
						</div> 
					</div>
				</nav>
			</div>
			<div id="home" class="header img-holder" data-image="<?php echo base_url(); ?>assets/images/bg.jpg">
					
					<div class="container greeting">
						<h1 id="greet_1">Hi</h1>
						<h1 id="greet_2">I'm Victor</h1>
						<h1 id="greet_3">a computer geek who likes to code</h1>
						<div id="work-arrow">
							<a href="#work"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/work-arrow.png" alt="work"></a>
						</div>
					</div>

			</div>