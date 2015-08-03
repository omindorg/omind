<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		header.inc.php
* @Package:		GetSimple
* @Action:		Diki theme for GetSimple CMS
*
*****************************************************/
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="robots" content="index,follow">

    <title><?php Site_Title( get_page_slug(false) ); ?></title>

    <?php if ( Multi_Language() ){ ?>
        <?php get_i18n_header(); ?>
    <?php }else{ ?>
        <?php get_header(); }?>

    <link href="<?php get_theme_url(); ?>/css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="<?php get_theme_url(); ?>/css/default.css" rel="stylesheet" type="text/css" />
    <link href="<?php get_theme_url(); ?>/css/layout.css" rel="stylesheet" type="text/css" />
    
    <link href="<?php get_theme_url(); ?>/css/responsive.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />

    <style type="text/css">
        <?php get_component('css'); ?>

    </style>
    <link rel="shortcut icon" href="<?php get_site_url(); ?>favicon.ico" type="image/x-icon" />
	
    <!--[if lt IE 9]>
        <script src="<?php get_theme_url(); ?>/js/html5shiv.min.js"></script>
    <![endif]-->
</head> 
<body id="<?php get_page_slug(); ?>" >

    <!-- site header -->
    <header>
        <div class="wrapper">

            <!-- logo/sitename -->
            <div class="logo"><a href="<?php get_site_url(); ?>" ><?php Site_Logo() ?></a></div>

            <!-- main navigation -->
            <nav>
                <ul>
                    <?php if (Multi_Language()) { ?>
                        <?php get_i18n_navigation(return_page_slug(FALSE)); ?>
                    <?php } else { ?>
                        <?php get_navigation(get_page_slug(FALSE));
                    } ?>
                    
                    <li><?php Language_Links(); ?></li>
                </ul>
            </nav>
        </div>
    </header>