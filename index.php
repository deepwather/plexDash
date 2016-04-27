<?php include("config/login.php"); ?>
<!DOCTYPE html>
<html lang="en" ng-app="plexDash">
    
    <title>plexDash | stable v1.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A system Information dashboard for plex-servers">
    <meta name="author" content="Michael Reber - swiss">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/plexTemplate.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/plexDash.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

<style>
    td {word-break: break-all;}
</style>

    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Allow web app to be run in full-screen mode. -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Configure the status bar. -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- Set the viewport. -->
    <meta name="viewport" content="initial-scale=1">
    <!-- Disable automatic phone number detection. -->
    <meta name="format-detection" content="telephone=no">
	
	<!-- Angular Libs -->
    <script src="js/angular.min.js" type="text/javascript"></script>
    <script src="js/angular-route.js" type="text/javascript"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body class="content">
<div class="container">
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img alt="plexDash" src="img/logo-plexDash.png" height="40">
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li><a href="index.php"><i class="fa fa-lg fa-home"></i></a></li>
                    <li class="active"><a href="index.php">plexDash</a></li>
                    <li><a href="index.php?logout=1">logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="body-container">
	<div class="container-fluid">
		<div class="table-card-header">
			<div class="header-bar">
				<span><i class="fa fa-list-alt"></i> System Information</span>
			</div>

		</div>
		<div class="table-card-back">
			<div>
				<ul class="nav nav-pills" role="tablist">

				<li ng-class="{active: isActive(navItem) }" ng-repeat="navItem in items">
						<a href="#/{{navItem}}">
							{{getNavItemName(navItem)}}
						</a>
					</li>
		
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="tabs-1">
						<table class="display" width="100%">
							
							<div class="hero">
								<nav-bar></nav-bar>
							</div>
							
							<div 
								id="plugins"  
								class="animated fadeInDown" 
								ng-view>
							</div>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Javascript-->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plexDash.js" type="text/javascript"></script>
<script src="js/modules.js" type="text/javascript"></script>
<script src="js/smoothie.min.js" type="text/javascript"></script>

<script>
    // Work around for iOS web app links opening in Safari
    $(document).ready(function () {
        if (("standalone" in window.navigator) && window.navigator.standalone) {
            // For iOS Apps
            $('a').on('click', function (e) {
                e.preventDefault();
                var new_location = $(this).attr('href');
                if (new_location != undefined && new_location.substr(0, 1) != '#' && $(this).attr('data-method') == undefined) {
                    window.location = new_location;
                }
            });
        }
    });
</script>

</body>
</html>