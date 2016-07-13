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
		<?php echo $this->render(Base::instance()->get('content')); ?>

		<script src="js/vendor/jquery.js"></script>
	    <script src="js/vendor/what-input.js"></script>
	    <script src="js/vendor/foundation.js"></script>
	    <script src="js/app.js"></script>
	</body>
</html>
