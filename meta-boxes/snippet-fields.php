<strong> Enable/Disable : </strong>
Choose any options (Default Disabled) : 
<select name="snippet_enable">
	<option <?php selected('0', $en); ?> value="0"> disabled </option>
	<option <?php selected('1', $en); ?> value="1"> enabled </option>
</select>
<hr/>
<br/>

<strong> Select the snippet type : </strong> <span style="color:#BD2626">(current version supports only one)</span> 
<select name="snippet_type">
	<option <?php selected('AggregateRating', $type); ?> value="AggregateRating">Aggregate Review</option>					
</select>

<br /><br/>

<strong> Name : </strong>
<span style="font-style:italic">Provide a smart Name for the product/post/page. <span style="color:#BD2626">If skipped Post Title will be used </span></span>
<input name="snippet_name"  type='text' value="<?php echo trim($name); ?>" />	
			
<br /><br/>

<strong> Description : </strong>
<span style="font-style:italic">Provide a little description of the product/post/page (to be shown in the search engine)</span><br/>
<textarea name="snippet_description" rows="3" cols="73"><?php echo $des; ?></textarea>			

<br/><br/>

<strong> Image : </strong>
<span style="font-style:italic">Provide a valid url of the image of the product/post/ page (optional)</span>
<input  name="snippet_image"  type="text" value="<?php echo trim($img); ?>" />
		
<br/><br/>

<strong>Star Options : </strong><br/>
<strong>Best Rating : </strong>
<span style='font-style: italic; color:#BD2626'> (If skipped, 5 will be used) </span>
<input type="text" name="snippet_best" value="<?php echo trim($max); ?>" />
<br/>
<strong> Current Rating Value (Out of Best Rating) : </strong> <span style='font-style: italic; color:#BD2626'> (If skipped, 4.5 will be used) </span>
<input type="text" name="snippet_rating" value="<?php echo trim($rating); ?>" />
<br/>

<strong> Current Review Number : </strong> <span style='font-style: italic; color:#BD2626'> (how many user reviews you want to show) </span>
<input type="text" name="snippet_review_number" value="<?php echo trim($rnum);  ?>" />

<hr/><br/>
<div> 
	<strong> Address  </strong>  (Optional)
	<select name="snippet-address-enabled">
		<option <?php selected(0,$add_en); ?> value="0">Disabled</option>
		<option <?php selected(1,$add_en); ?> value="1">Enabled</option>
	</select>
	<br/>
	<strong>Street Address </strong> <br/>
	<textarea name="snippet-street-address" rows="4" cols="50"><?php echo $add_street; ?></textarea>
	<br/>
	<strong> Address Locality </strong>
	<input name="snippet-locality-address" type="text" value="<?php echo $add_local; ?>" />
	<br/>
	<strong> address Region </strong>
	<input name="snippet-region-address" type="text" value="<?php echo $add_region; ?>" />
	<br/>
	<strong>Postcode</strong> <input type='text' name="snippet-postcode" value="<?php echo $add_postcode; ?>" />
	
	
</div> 