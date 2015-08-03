<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		functions.php
* @Package:		GetSimple
* @Action:		Diki theme for GetSimple CMS
*
*****************************************************/

/**
 * Parent Link
 *
 * This creates a link for a parent for the breadcrumb feature of this theme
 *
 * @param string $name - This is the slug of the link you want to create
 * @return string
 */
function Parent_Link($name) {
	$file = GSDATAPAGESPATH . $name .'.xml';
	if (file_exists($file)) {
		$p = getXML($file);
		$title = $p->title;
		$parent = $p->parent;
		$slug = $p->slug;
		echo '<a href="'. find_url($name,'') .'">'. $title .'</a> <span class="sep"></span> ';
	}
}

/**
 * Get Title
 *
 * This get page title
 *
 * @param string $name - This is the slug of the link you want to show
 * @return string
 */
function Site_Title($name) {
	$separator = ' - ';
    $title = get_page_clean_title(false);
    $sitename = get_site_name(false);

	if ( $name != 'index' ) {
        echo $title .$separator .$sitename;
	}else{
        echo $sitename .$separator .$title;
    }
}

/**
 * Is Multi Language support
 *
 * If page site support Language
 *
 * @none
 * @return bool
 */
function Multi_Language(){
	return function_exists('i18n_main') && function_exists('get_i18n_navigation');
}

/**
 * Get All Languages Links
 *
 * Get Languages Links if exist
 *
 * @none
 * @return string
 */
function Language_Links(){
    $links = Multi_Language();
    if( $links ){
        $language_code = array(
            'en'=>'English',
            'cn'=>'简体中文',
            'tw'=>'繁体中文-台湾',
            'hk'=>'繁体中文-香港',
            'de'=>'Deutsch',
            'es'=>'Español',
            'fr'=>'Français',
            'it'=>'Italiano',
            'ru'=>'Русский',
            'kr'=>'한국어',
            'jp'=>'日本語',
            'ar'=>'العربية',
            'hi'=>'हिन्दी'
        );
        $now=$_GET['lang'];
        $defualt = $now ? $now : return_i18n_default_language();

        $languages = return_i18n_available_languages();
        $links = '<select class="setlang" onchange="window.location.href=$(this).val();">';
        foreach ( $languages as $value ){
            $selected = ($defualt==$value) ? ' selected="selected"' : '';
            $links .= '<option value="'.return_i18n_setlang_url($value). '"'. $selected .'>'. $language_code[$value] .'</a></option>';
        }
        $links .= '</select>';

        echo $links;
    }
}

/**
 * Get Logo
 *
 * @url
 * @return bool
 */
function Site_Logo() {
    $logo_path = 'data/uploads/logo.png';
    $logo_img = GSROOTPATH. $logo_path;
	$logo_url = get_site_url(FALSE). $logo_path;
	$site_name = get_site_name(FALSE);

	if( is_file($logo_img) ){
		$img_attr = @getimagesize($logo_url);
		$logo = '<img src="'. $logo_url.'" '. $img_attr[3].' alt="'. $site_name.' LOGO" />';
	}else{
		$logo = '<span>'.$site_name.'</span>';
	}

	echo $logo;
}