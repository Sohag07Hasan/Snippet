<?php
/*
 * plugin name: Google Multi User Review Maker
 * author: Mahibul Hasan Sohag
 * Description: Creates Multi user Review for posts and pages. The admin can customize the review number, maximum review etc easily.
 * Author Uri: http://demo.sohag.me
 * Plugin Uri: http://sohag07hasan.elance.com
 */


define('GoogleReviewSnippetDir', dirname(__FILE__));
define('GoogleReviewSnippetUrl', plugins_url('', __FILE__) );

include GoogleReviewSnippetDir . '/classes/options-page.php';
include GoogleReviewSnippetDir . '/classes/microdata.php';


//initiating the hooks
GR_Options_Page :: init();
GR_microdata :: init();

?>
