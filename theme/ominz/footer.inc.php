<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 		footer.inc.php
* @Package:		GetSimple
* @Action:		Diki theme for GetSimple CMS
*
*****************************************************/
?>

<!-- site footer -->
<footer>
    <div class="wrapper">
        <div class="quicklink">
            <?php if (Multi_Language()) { ?>
                <?php get_i18n_component('footer'); ?>
            <?php } else { ?>
                <?php get_component('footer');
            } ?>
        </div>
        <div class="bottom">
            <div class="left">
                &copy;<?php echo date('Y'); ?>
                <b><a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a></b>.
                <?php if (Multi_Language()) { ?>
                    <?php get_i18n_component('copyright'); ?>
                <?php } else { ?>
                    <?php get_component('copyright');
                } ?>
            </div>
            <div class="right">
                <span>Powered by <a href="http://www.omind.org/" target="_blank" >OMind</a></span>
            </div>
        </div>
    </div>
    <a href="#" class="scrollup" style="display:none;">Top</a>
</footer>

<script>
	/* shopping cart */
	simpleCart({
		checkout: {
			type: "PayPal",
			email: "<?php get_component('paypal'); ?>"
		}
	});
</script>

<script src="<?php get_theme_url(); ?>/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php get_theme_url(); ?>/js/scrollfix.js" type="text/javascript"></script>
<script src="<?php get_theme_url(); ?>/js/jquery.glide.min.js" type="text/javascript"></script>
<script src="<?php get_theme_url(); ?>/js/simpleCart.min.js" type="text/javascript"></script>
<script src="<?php get_theme_url(); ?>/js/prettify.js" type="text/javascript"></script>
<script src="<?php get_theme_url(); ?>/js/omind.js" type="text/javascript"></script>

</body>
</html>