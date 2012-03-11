<?php
/*
 * plugin name: Google Multi User Review Maker
 * author: Mahibul Hasan Sohag
 */


define('GoogleReviewSnippetDir', dirname(__FILE__));
define('GoogleReviewSnippetUrl', plugins_url('', __FILE__) );

include GoogleReviewSnippetDir . '/classes/options-page.php';
include GoogleReviewSnippetDir . '/classes/microdata.php';


//initiating the hooks
GR_Options_Page :: init();
GR_microdata :: init();

?>
