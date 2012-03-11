<?php

/*
 * creates a submenu to insert premium information
 *  
 */
class GR_Options_Page{
	
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
	?>
	
		<div class="wrap">
			<?php screen_icon('options-general'); ?>
			<h2> Google Aggregate reviews Activation </h2>
			<form  class="form-table" action="" method="post">
				
				<h3> Review Snippet API Key </h3>
				enter a valid Api to activate the plugin
				<table >
					<tbody>
						<tr>
							<th>Api Key</th>
							<td> <input size="20" type="text" name="GRapi_key" value="<?php echo 'null' ?>"> </td>
						</tr>					
					</tbody>
				</table>
				
				<h3> Email </h3>
				enter a registered email address
				<table >
					<tbody>
						<tr>
							<th>Email</th>
							<td> <input size="40" type="text" name="GR_email" value="<?php echo 'null' ?>"> </td>
						</tr>					
					</tbody>
				</table>
				
				
			</form>
		</div>

	<?php
	}
	
}
