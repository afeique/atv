<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="<?php echo $ENCODING; ?>">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>acrossti.me</title>
		<base href="<?php echo $SCHEME.'://'.$HOST.':'.$PORT.$BASE.'/'; ?>">
		<link rel="stylesheet" href="css/code.css" type="text/css">
		<link rel="stylesheet" href="css/foundation.css" type="text/css">
    	<link rel="stylesheet" href="css/foundation-icons.css" type="text/css">
    	<link rel="stylesheet" href="css/app.css" type="text/css">
	</head>
	<body>
		<div class="top-bar" id="realEstateMenu">
	      <div class="top-bar-left">
	        <ul class="menu" data-responsive-menu="accordion">
	          <li class="menu-text">acrossti.me</li>
	          <li><a href="#">feeds</a></li>
	          <li><a href="#">writing</a></li>
	          <li><a href="#">poetry</a></li>
	          <li><a href="#">music</a></li>
	        </ul>
	      </div>
	      <div class="top-bar-right">
	        <ul class="menu">
	          <li><a href="#">My Account</a></li>
	          <li><a class="button">Login</a></li>
	        </ul>
	      </div>
	    </div>
	    <!-- /Navigation -->

	    <br>
		
		<?php echo $this->render(Base::instance()->get('content')); ?>

		<script src="js/vendor/jquery.js"></script>
	    <script src="js/vendor/what-input.js"></script>
	    <script src="js/vendor/foundation.js"></script>
	    <script src="js/app.js"></script>
	</body>
</html>
