<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>" lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		<?php tpl_pagetitle(); ?> [<?php echo strip_tags($conf['title']); ?>]
	</title>
	<?php tpl_metaheaders(); ?>
	<link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.png" />
</head>

<body>
	<div class="dokuwiki">
		<?php html_msgarea(); ?>
		<?php require_once('header.php'); ?>
		
		<div class="content main">
			<div class="headerclear"></div>
			<?php tpl_content(); ?>
			<div class="footerclear"></div>
		</div>
		<div class="sidebar">
		    some test text
		</div>
		<?php require_once('footer.php'); ?>
	</div>
	<div class="no"><?php tpl_indexerWebBug(); ?></div>
</body>
</html>
