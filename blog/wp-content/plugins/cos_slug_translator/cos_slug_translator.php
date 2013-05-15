<?php
/*
Plugin Name:cos_slug_translator
Plugin URI: http://www.storyday.com/html/y2007/1202_auto-slug-translate-plugin.html
Description: 自动将中文标题翻译成英语
Version: 2.1
Author: jiangdong
date:2008-10-27
Author URI:http://www.storyday.com/html/y2007/1202_auto-slug-translate-plugin.html
*/

define("TRANS_KEY","2096442166");
define("TRANS_FROM","mozezetest");

if( !class_exists("Snoopy") )
	require_once (ABSPATH."/wp-includes/class-snoopy.php");
function cos_tranlate($text){
	$snoopy = new Snoopy;
	$url = "http://ajax.googleapis.com/ajax/services/language/translate?v=1.0&q=".urlencode($text)."&langpair=zh-CN%7Cen";
	$submit_vars["text"] = $text;
	$submit_vars["ie"] = "UTF8"; 
	$submit_vars["hl"] = "zh-CN"; 
	$submit_vars["langpair"] = "zh|en"; 
	$snoopy->submit($url,$submit_vars);
	$htmlret = $snoopy->results;
	$htmlret = explode('translatedText',$htmlret);
	$htmlret = explode('}',$htmlret[1]);
	$htmlret = $htmlret[0];
	$htmlret = str_replace('"','',$htmlret);
	$htmlret = str_replace(':','',$htmlret);
	return $htmlret;
}

if( !function_exists("CosSlugTrans")){
// add slug from tag in content
	function CosSlugTrans($postID){
	global $wpdb,  $tableposts;
		$sql = "SELECT post_title,post_name FROM $tableposts WHERE ID=$postID";
		$res = $wpdb->get_results($sql);	
		$post_title = $res[0]->post_title;
		$tran_title = cos_tranlate($post_title);
		$slug = $tran_title;
		if(function_exists("sanitize_title") ) {
			if( sanitize_title( $res[0]->post_title ) != $res[0]->post_name  ){
				if( !substr_count($path, '%') ) 
					return true;
			}
			$slug = sanitize_title( $slug);
			if( strlen($slug) < 2 ) return true;//translation fail
		}
			$sql ="UPDATE ".$tableposts." SET `post_name` = '".$slug."' WHERE ID =$postID;";		
			$res = $wpdb->get_results($sql);
			
	}	
}

add_action('publish_post', 'CosSlugTrans');
add_action('edit_post', 'CosSlugTrans');