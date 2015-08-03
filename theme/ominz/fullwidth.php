<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		fullwidth.php
* @Package:		GetSimple
* @Action:		Diki theme for GetSimple CMS
*
*****************************************************/


# Include the header template
include('header.inc.php'); 
?>
	<div class="fullwidth">
		<!-- page content -->
		<article>
			<section>
				<?php get_page_content(); ?>
			</section>
		</article>
	</div>

<?php include('footer.inc.php'); ?>