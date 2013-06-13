<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>PlusSignIn | gDays Nigeria 2013</title>
		<meta name="description" content="Google Plus SignIn Demo for g|Nigeria" />
		<meta name="author" content="Oyewale Oyediran" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<!--<link rel="stylesheet" href="css/normalize.css">-->
        <!--<link rel="stylesheet" href="css/main.css">-->
        <!-- Le styles -->
	    <link href="assets/css/bootstrap.css" rel="stylesheet">
	    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	    <link rel="stylesheet" href="css/style.css">
	
	    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="assets/js/html5shiv.js"></script>
	    <![endif]-->
	
	    <!-- Fav and touch icons -->
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
	      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
	                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	                                   <link rel="shortcut icon" href="assets/ico/favicon.png"> 
	        
	        
	</head>

	<body itemscope itemtype="http://schema.org/Thing">
		<div id="wrap">
			<!-- NAVBAR
		    ================================================== -->
		    <div class="navbar-wrapper" id="push">
		      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
		      <div class="container" >
		
		        <div class="navbar navbar-inverse">
		          <div class="navbar-inner">
		            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
		            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		            <a class="brand" href="#">g|Days</a>
		            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
		            <div class="nav-collapse collapse">
		              <ul class="nav">
		                <li><a href="#">Home</a></li>
		                <li class="active"><a href="#about">About</a></li>
		                <li><a href="#contact">Contact</a></li>
		                
		              </ul>
		            </div><!--/.nav-collapse -->
		          </div><!-- /.navbar-inner -->
		        </div><!-- /.navbar -->
		
		      </div> <!-- /.container -->
		    </div><!-- /.navbar-wrapper -->
		    

		    <div class="container" style="padding-top: 90px; padding-bottom: 90px;">
		    	<div>
					<ul class="breadcrumb">
					  <li><a href="#">Home</a> <span class="divider">/</span></li>
					  <li><a href="#">Sessions</a> <span class="divider">/</span></li>
					  <li class="active">Developer Track</li>
					</ul>
				</div>
				
				<div class="row">
					<div class="span7">
						<img class="img-polaroid" src="img/plus.png" width="700px" height="auto"/>
					</div>
					<div class="span5 media" style="padding-top: 50px;">
					  <a class="pull-left" href="#">
					    <img class="media-object" src="img/chrome.png" width="80px" height="auto" itemprop="image"/>
					  </a>
					  <div class="media-body">
					    <h4 class="media-heading" itemprop="name">Google+ SignIn</h4>
					    <p itemprop="description">Learn how to Integrate Google Plus sign-in to your web applications.</p>					    
					  </div>
					  <div style="padding-top: 50px; padding-left: 50px;">
					  	<button class="btn btn-large btn-primary" id="loud" onclick="loudIt()">Loud It on Google+ </button>
					    
				
						
						<p>You are signed in as:<br /><strong id="name">???</strong></p>
						<a id="revokeButton" class="btn btn-danger" href="#" style="display: none;">Logout</a><br />
						<span id="signinButton">
						  <span
						    class="g-signin"
						    data-callback="signinCallback"
						    data-clientid="868611294351.apps.googleusercontent.com"
						    data-cookiepolicy=data-cookiepolicy="http://whales.com.ng"
						    data-requestvisibleactions="http://schemas.google.com/AddActivity"
						    data-scope="https://www.googleapis.com/auth/plus.login" style="display: none">
						  </span>
						</span>
					  </div>
					 </div>
				</div>
				<div>
					<div class="pagination">
					  <ul>
					    <li><a href="#">Prev</a></li>
					    <li><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li><a href="#">Next</a></li>
					  </ul>
					</div>
				</div>
		
		    </div><!-- /.container -->
	   </div>
	    
	    <div id="footer">
	      <div class="container">
	        <!--<p class="pull-right"><a href="#">Back to top</a></p>-->
        <p>&copy; 2013 Google Developer Groups, Nigeria &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
	      </div>
	    </div>
	    

		<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	        <script src="js/plugins.js"></script>
	        <script src="js/main.js"></script> -->
	    <!-- Le javascript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="assets/js/jquery.js"></script>
	    <script src="assets/js/bootstrap-transition.js"></script>
	    <script src="assets/js/bootstrap-alert.js"></script>
	    <script src="assets/js/bootstrap-modal.js"></script>
	    <script src="assets/js/bootstrap-dropdown.js"></script>
	    <script src="assets/js/bootstrap-scrollspy.js"></script>
	    <script src="assets/js/bootstrap-tab.js"></script>
	    <script src="assets/js/bootstrap-tooltip.js"></script>
	    <script src="assets/js/bootstrap-popover.js"></script>
	    <script src="assets/js/bootstrap-button.js"></script>
	    <script src="assets/js/bootstrap-collapse.js"></script>
	    <script src="assets/js/bootstrap-carousel.js"></script>
	    <script src="assets/js/bootstrap-typeahead.js"></script>
	    
	    
	    
	     <!-- Place this asynchronous JavaScript just before your </body> tag -->
	    <script type="text/javascript">
	      (function() {
	       var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	       po.src = 'https://apis.google.com/js/client:plusone.js';
	       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	     })();
	    </script>
	    
	    <script type="text/javascript" src="js/main.js"></script>
	</body>
</html>
