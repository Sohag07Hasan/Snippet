<?php

/*
 * creates a submenu to insert premium information
 *  
 */
class GR_Options_Page{
	
	//store error information
	private  $error = array();
	
	
	/*
	 * initialize all the hooks
	 */	
	static function init(){
		add_action('admin_menu', array(get_class(), 'admin_menu'));		
	}
	
	/*
	 * Create an options page 
	 */
	static function admin_menu(){
		add_options_page(__('Google Rich Review Snippet Activation'), __('Review Snippet'), 'manage_options', 'google-review-snippet', array(get_class(), 'options_page_content'));
	}
	
	/*
	 * Main content of the options page
	 * */
	static function options_page_content(){
		//form is submitted
		if($_REQUEST['google-rich-snippet-submitted'] == 'Y') :
			include GoogleReviewSnippetDir . '/core/snippet-activation.php';
			if(count($error) == 0):
				$activation_request = self :: GR_snippet_activation();
			endif;
		endif;
		
		$email = get_option('GR_email');
		$api = get_option('GR_apikey');
		
	?>
	
		<div class="wrap">
			<?php screen_icon('options-general'); ?>
			<h2> Google Aggregate reviews Activation </h2>
			
			<?php
				//notification
			if($_REQUEST['google-rich-snippet-submitted'] == 'Y') :
				if(count($error) > 0):
					echo "<div class='error'><p>Invalid Email</p></div>";
				else :
					echo "<div class='updated'><p>Options are Saved</p></div>";
				endif;
			endif;
			?>
			
			<form  class="form-table" action="" method="post">
				<input type="hidden" name="google-rich-snippet-submitted" value="Y" />
				<h3> Review Snippet API Key </h3>
				enter a valid Api to activate the plugin
				<table >
					<tbody>
						<tr>
							<th>Api Key</th>
							<td> <input size="20" type="text" name="GRapi_key" value="<?php echo $api; ?>"> </td>
						</tr>					
					</tbody>
				</table>
				
				<h3> Email </h3>
				enter a registered email address
				<table >
					<tbody>
						<tr>
							<th>Email</th>
							<td> <input size="40" type="text" name="GR_email" value="<?php echo $email; ?>"> </td>
						</tr>					
					</tbody>
				</table>
				
				<h3>Activate/Deactivate</h3>
				<table >
					<tbody>
						<tr>
							<td><input name="snippet_activation_submitted" type="submit" value="Activate" /></td>
							<td><input name="snippet_deactivation_submitted"  type="submit" value="Deactivate" /></td>
						</tr>					
					</tbody>
				</table>
				
			</form>
		</div>

	<?php
	}
	
	/*
	 * this will send request to the original server and take necessary steps
	 */
	function GR_snippet_activation(){
		$a = wp_remote_get('http://localhost/wordpress/?GR_SNIPPET_ACTIVATION=y');
		var_dump($a);
		exit;
	}
	
}
