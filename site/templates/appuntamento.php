<html>
<head>
	<title>La Crostaceria - <?php echo html($page->title_ita()) ?></title>
	<meta property="og:title" content="<?php echo html($page->title_ita()) ?>" /> 
  	<meta property="og:image" content="<?php echo url('assets/img/sitewide/logo.png') ?>" /> 
  	<meta property="og:description" content="<?php echo html($page->text_ita()) ?>" /> 
  	<meta property="og:url" content="<?php echo $page->url() ?>">
</head>
<body style="display:none;">
	<h2><?php echo html($page->title()) ?></h2>
	<h1><?php echo html($page->title_ita()) ?></h1>
	<h2><?php echo html($page->title_en()) ?></h2>
	<div><?php echo kirbytext($page->text_ita()) ?></div>
	<div><?php echo kirbytext($page->text_en()) ?></div>

	<script>
		window.location = "/"
	</script>
</body>
</html>

