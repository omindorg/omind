<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Diki theme for GetSimple CMS
*
*****************************************************/

include('header.inc.php'); 
?>

	<div class="breadcrumbs" >
		<div class="wrapper">
			<a href="<?php get_site_url(); ?>">Home</a> <span class="sep"></span> <?php Parent_Link(get_parent(FALSE)); ?><span><?php get_page_clean_title(); ?></span>
		</div>
	</div>

    <div class="container">
        <div class="wrapper">
            <!-- page content -->
            <article>
                <section>
                    <h1><?php get_page_title(); ?></h1>
                    <?php get_page_content(); ?>
                </section>
            </article>

            <!-- sidebar section -->
            <aside>
                <div class="section">
                    <?php if ( Multi_Language() ){ ?>
                    <?php get_i18n_component('sidebar'); ?>
                    <?php }else{ ?>
                    <?php get_component('sidebar'); }?>
                </div>
            </aside>
        </div>
    </div>

<?php include('footer.inc.php'); ?>