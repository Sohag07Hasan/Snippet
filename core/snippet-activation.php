<?php
/*
 * Saves the registered email and site for the paid users
 */

$mail = trim($_REQUEST['GR_email']);
$key = trim($_REQUEST['GRapi_key']);

if(is_email($mail)){
	update_option('GR_email', $mail); 
}
else{
	$error['email'] = 1;
}
update_option('GR_apikey', $key);
