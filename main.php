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

<?php
    // bring in utility functions
    require_once(dirname(__FILE__).'/helper_functions.php');

    // buffer the contents
    ob_start();
    tpl_content(false);
    $content = ob_get_clean();
    
    // grab menu and sidebar
    $menu = locate_page(tpl_getConf('menuname'));
    $sidebar = locate_page(tpl_getConf('sidebarname'));
?>

<body>
	<div class="dokuwiki">
		<?php html_msgarea(); ?>
		<?php require_once('header.php'); ?>
		
		<div class="content main">
			<div class="headerclear"></div>
			<div>
			    <div class="sidebar">

			        <?php if (tpl_toc(true)) {?>
			        <div class="chunk thetoc"><?php tpl_toc();?></div>
			        <?php }?>

                    <?php if ($menu) {?>
			        <div class="chunk"><?php tpl_include_page($menu);?></div>
                    <?php }?>

                    <?php if ($sidebar) { tpl_include_page($sidebar); }?>
        		</div>
        		<div style="margin-left: 230px;">
    			    <?php echo $content; ?>
			    </div>
			</div>
			
			<div class="footerclear"></div>
		</div>
		<?php require_once('footer.php'); ?>
	</div>
	<div class="no"><?php tpl_indexerWebBug(); ?></div>
</body>
</html>
