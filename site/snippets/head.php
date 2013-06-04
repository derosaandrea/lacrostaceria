<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="it"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="it"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="it"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="it"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />


	<link rel="icon" href="<?php echo url('assets/img/icons/favicon.ico') ?>" />

	<title><?php echo html($site->title()) ?></title>
	<meta name="description" content="<?php echo html($site->description()) ?>">

	<link href='http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<?php echo css('assets/css/style.css') ?>

	<!-- Modernizer -->
  	<?php echo js("assets/js/libs/modernizr-2.5.3.min.js") ?>	
</head>