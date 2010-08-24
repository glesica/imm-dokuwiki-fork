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

    // sidebar and footer settings
    $use_sidebar = tpl_getConf('usesidebar');
    $use_content_footer = tpl_getConf('usefooter');
    // sidebar and content
    $menu_page = '';
    $sidebar_page = '';
    $foot_page = '';
    if ($use_sidebar) {
        // only need to set these if we're using a sidebar
        $menu_page = locate_page(tpl_getConf('menuname'));
        $sidebar_page = locate_page(tpl_getConf('sidebarname'));
        // buffer the page contents, suppress TOC
        ob_start();
        tpl_content(false);
        $page_content = ob_get_clean();
    } else {
        // buffer the page contents normally
        ob_start();
        tpl_content();
        $page_content = ob_get_clean();
    }
    // footer
    if ($use_content_footer) {
        $footer_page = locate_page(tpl_getConf('footername'));
    }
?>

<body>
	<div class="dokuwiki">
		<?php html_msgarea(); ?>
		<?php require_once('header.php'); ?>
		<div class="content main">
			<div class="headerclear"></div>
			    <?php if ($use_sidebar) {?>
			    <div class="sidebar">
			        <?php if (tpl_toc(true)) {?>
			        <div class="chunk"><?php tpl_toc();?></div>
			        <?php }?>

                    <?php if ($menu_page) {?>
			        <div class="chunk">
			            <div class="menu__header">
			                <div>Menu</div>
			            </div>
			            <div class="menu__inside">
			                <?php tpl_include_page($menu_page);?>
		                </div>
			        </div>
                    <?php }?>

                    <?php if ($sidebar_page) { tpl_include_page($sidebar_page); }?>
        		</div>
        		<?php }?>
        		<?php if($use_sidebar) {?><div style="margin-left: 230px;"><?php }?>
    			    <?php echo $page_content; ?>
    			    <?php if ($footer_page) {?>
    			    <div class="content__footer">
    			        <?php tpl_include_page($footer_page); ?>
			        </div>
			        <?php }?>
			    <?php if($use_sidebar) {?></div><?php }?>
			<div class="footerclear"></div>
		</div>
		<?php require_once('footer.php'); ?>
	</div>
	<div class="no"><?php tpl_indexerWebBug(); ?></div>
</body>
</html>
