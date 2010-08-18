<div class="header">
	<div class="titlebar">
		<div class="search"><?php tpl_searchform(true, false); ?></div>
		<div class="title"><?php tpl_link(DOKU_BASE, $conf['title'], 'title="'.$conf['title'].'"');?> | </div>
		<div class="pagetitle"><?php tpl_pagetitle(); ?></div>
	</div>
	<div class="subtitlebar">
		<div class="user icon_buttons"><?php tpl_userinfo(); tpl_button('login'); ?></div>
		<div class="breadcrumb">
		<?php 
			if($conf['youarehere']) {
				tpl_youarehere(' &raquo; ');
			} else {
				tpl_breadcrumbs(' &raquo; ');
			}
		?></div>
	</div>
</div>
