<?php
/*
Plugin Name: ABCSpam
Plugin URI: http://www.bbpress.me/forums/topic/me-plug-in/
Version: 0.1
Author: bbpress.me
Author URI: http://www.bbpress.me
Description: Wordpress的垃圾评论中有95%是全英文评论和含有日文字符的评论，该插件用于禁止全英文回复，有效阻止bbpress里的回复垃圾，效率高不写数据库，但有一定局限性。
*/

function bbSpamStopCheck( $comment ) { 
if (is_admin()){
	$strContent = $comment['comment_content'];
	wp_die($strContent);
	//$pattern = '/[一-龥]/u'; 
	// 禁止全英文评论 
	//$status = preg_match_all(utf8_encode($pattern), utf8_encode($comment['comment_content']),$match);
	//if(!$status) { 
		//$mess = 'You should type some Chinese word (like 支持 ) in your comment to pass the spam-check, thanks for your patience! 您的评论中必须包含汉字!'; 
        	//wp_die($mess . '<br /><a href="' . $_SERVER['HTTP_REFERER'] .'#respond">返回</a>'.$status.utf8_encode($comment['comment_content']));
	//} 
	//return( $incoming_comment ); 
}
} 

add_filter('bbp_new_reply_pre_content', 'bbSpamStopCheck');
add_filter('bbp_new_topic_pre_content', 'bbSpamStopCheck');


?>
