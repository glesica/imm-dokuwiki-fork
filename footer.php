<div class="footer">
	<div class="pageinfo"><?php tpl_pageinfo(); ?></div>
	<div class="actions icon_buttons"><?php tpl_button('edit'); tpl_button('index'); tpl_button('admin'); ?></div>
	<form class="button" method="get" action="<?php wl($ID)?>">
        <div class="no">
            <input type="submit" value="Export to PDF" class="button" style="background-image: url(<?php echo DOKU_BASE?>lib/images/fileicons/pdf.png);" />
            <input type="hidden" name="do" value="export_pdf" />
            <input type="hidden" name="id" value="<?php echo $ID?>" />
        </div>
    </form>
	<div class="copyright">Theme: <a href="http://github.com/glesica/imm-dokuwiki-fork">imm-dokuwiki-fork</a>, original theme copyright 2010 <a href="mailto:webmaster@ianmcintosh.org">Ian McIntosh</a></div>
	<div class="copyright"><a href="http://www.famfamfam.com/lab/icons/silk/">Silk</a> Icon Set</div>
</div>
